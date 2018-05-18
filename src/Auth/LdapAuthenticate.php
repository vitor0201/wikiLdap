<?php
namespace App\Auth;

use Cake\Auth\BaseAuthenticate;
use Cake\Network\Request;
use Cake\Network\Response;
use Cake\ORM\TableRegistry;

class LdapAuthenticate extends BaseAuthenticate
{

    // protected $_host = 'your_ldap_server' ;

    public function authenticate(Request $request, Response $response)
    {

        $username = $request->data['usuario'];
        $password = $request->data['senha'];
        try {
            if ($provider = $this->connect()) {
                if ($provider->auth()->attempt($username, $password)) {
                    $user = $provider->search()->users()->find($username);
                    // debug($user['attributes']['samaccountname'][0]);die();
                    return $user;
                }
            }
        } catch (\Adldap\Auth\UsernameRequiredException $e) {
            \Cake\Log\Log::write(LOG_ERR, $e);
            return false;
        } catch (\Adldap\Auth\PasswordRequiredException $e) {
            \Cake\Log\Log::write(LOG_ERR, $e);
            return false;
        }
        return false;
    }

    public function connect()
    {
        $usuarios = TableRegistry::get('Parametros');
        $usuarios = $usuarios
            ->find(
                'list',
                [
                    'keyField' => 'chave',
                    'valueField' => 'valor',
                ]
            )->toArray();
        extract($usuarios);
        $admin_password = base64_decode($admin_password);
        $ad = new \Adldap\Adldap();
        // debug($admin_password); die();
        $config = [
            'account_suffix' => $account_suffix,
            'domain_controllers' => [$domain_controllers],
            'base_dn' => $base_dn,
            'port' => $port,
            // 'user_id_key' => 'sAMAccountName',
             'admin_username' => $admin_username,
            'admin_password' => $admin_password,
        ];
        $ad->addProvider($config);
        // debug($ad);
        // die();
        try {

            $provider = $ad->connect();
            return $provider;
        } catch (\Adldap\Auth\BindException $e) {
            \Cake\Log\Log::write(LOG_ERR, $e);
            debug($e);
            die();
            return false;
            // There was an issue binding / connecting to the server.
        }
    }
}

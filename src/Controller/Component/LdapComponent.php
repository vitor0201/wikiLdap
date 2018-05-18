<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\ORM\TableRegistry;

/**
 * Ldap component
 */
class LdapComponent extends Component
{
    // The other component your component uses
    // Execute any other additional setup for your component.

    public function findUser($user = null)
    {
        $provider = $this->connect();
        try {
            $search = ($provider->search()->select(['cn', 'samaccountname']));
            $search = $search->findByOrFail('samaccountname', addslashes($user));
            return true;
        } catch (\Adldap\Models\ModelNotFoundException $e) {
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
        try {
            $provider = $ad->connect();
            return $provider;
        } catch (\Adldap\Auth\BindException $e) {
            \Cake\Log\Log::write(LOG_ERR, $e);
            return null;
            // There was an issue binding / connecting to the server.
        }
    }
    public function register($user = null)
    {
        $usuario = array();
        $usuario['usuario'] = ($user['attributes']['samaccountname'][0]);
        $usuario['nome'] = ($user['attributes']['givenname'][0]);
        $usuario['nome_completo'] = ($user['attributes']['cn'][0]);
        $grupos = TableRegistry::get('grupos');
        $grupos = $grupos->find()
            ->select(['id'])
            ->join('Usuarios')
            ->where([
                'grupos.ativo' => true,
                'Usuarios.nome LIKE '=> $usuario['usuario']
            ])->hydrate(false)->toList();
        foreach($grupos as $key => $grupo){
            $usuario['grupo'][$key] = $grupo['id'];
        }
            return $usuario;
    }
}

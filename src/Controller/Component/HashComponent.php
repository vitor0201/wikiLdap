<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
// use Cake\Utility\Security;

/**
 * Hash component
 */
class HashComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function encrypt($chave = null, $senha = null)
    {
        if ($chave === "admin_password" && !empty($senha)) {
            // debug($senha); 
            $senha = base64_encode($senha);
            // $senha = (Security::encrypt($senha, Security::salt()));
            // $senha = utf8_encode( $senha);
            // debug($senha); 
            // $this->decrypt($senha);
            // die();
            return  $senha;
        }
        return false;
    }

    public function decrypt($senha = null)
    {
        if (!empty($senha)) {
            $senha = utf8_decode($senha);
            $senha = (Security::decrypt($senha, Security::salt()));
            debug($senha);
            die();
            return  $senha;
        }
        return false;
    }
}

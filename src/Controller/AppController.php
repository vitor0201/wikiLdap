<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */


    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Usuarios',
                'action' => 'login',
                'plugin' => false
            ],
            'authError' => 'Por favor, tente novamente!',
            'logoutRedirect' => '/',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        ['username' => 'usuario', 'password' => 'senha']
                    ]
                ]
            ],
            'storage' => 'Session',
            'unauthorizedRedirect' => '/',
        ]);
        $this->Auth->config('authenticate', [
            'Ldap'
        ]);
        $this->Auth->config('authorize', [
            'Controller',
            'Ldap'
        ]);

        $this->viewBuilder()->theme('TwitterBootstrap');
        $this->viewBuilder()->layout('adminlte');
        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }
    // public function beforeFilter(Event $event)
    // {
    //     parent::initialize();
    //     $this->set('user', $this->Auth->user());
    // }
    public function isAuthorized($user = null)
    {
        extract($this->request->params);
        $controladores = TableRegistry::get('Controladores');
        $controladores = $controladores
        ->find(
            'list',
            [
                'keyField' => 'id',
                'valueField' => 'action'
        ])->where(
            [
                'Controladores.controller LIKE' => $controller,
                'ativo' => true,
                'publico' => true
        ])->toArray();

        if (in_array($action, $controladores)) {
            return true;
        }
        return false;
    }
}

<?php
namespace App\Auth;

use App\Auth\LdapAuthorize;
use Cake\Auth\BaseAuthorize;
use Cake\Http\ServerRequest;
use Cake\Network\Request;
use Cake\ORM\TableRegistry;

class LdapAuthorize extends BaseAuthorize
{
    public function authorize($user, ServerRequest $request)
    {
        // $usuario = ($user['attributes']['samaccountname'][0]);
        $usuario = ($user['usuario']);
        extract($request->params);
        $usuarios = TableRegistry::get('Usuarios');
<<<<<<< HEAD
        $query    = $usuarios
            ->find()
            ->where(
                [
                    'Usuarios.nome LIKE'            => $usuario,
                    'Controladores.controller LIKE' => $controller,
                    'Controladores.action LIKE'     => $action,
                    'Controladores.ativo'           => true,
=======
        $query = $usuarios
            ->find()
            ->where(
                [
                    'Usuarios.nome LIKE' => $usuario,
                    'Controladores.controller LIKE' => $controller,
                    'Controladores.action LIKE' => $action,
                    'Controladores.ativo' => true,
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
                ]
            )
            ->join(
                [
<<<<<<< HEAD
                    'Grupos_Usuarios'      => [
                        'table'      => 'grupos_usuarios',
                        'type'       => 'INNER',
                        'conditions' => 'Usuarios.id = Grupos_Usuarios.usuarios_id',
                    ],
                    'Grupos'               => [
                        'table'      => 'grupos',
                        'type'       => 'INNER',
                        'conditions' => 'Grupos.id = Grupos_Usuarios.grupos_id',
                    ],
                    'Controladores_Grupos' => [
                        'table'      => 'controladores_grupos',
                        'type'       => 'INNER',
                        'conditions' => 'Grupos.id = Controladores_Grupos.grupos_id',
                    ],
                    'Controladores'        => [
                        'table'      => 'controladores',
                        'type'       => 'INNER',
=======
                    'Grupos_Usuarios' => [
                        'table' => 'grupos_usuarios',
                        'type' => 'INNER',
                        'conditions' => 'Usuarios.id = Grupos_Usuarios.usuarios_id',
                    ],
                    'Grupos' => [
                        'table' => 'grupos',
                        'type' => 'INNER',
                        'conditions' => 'Grupos.id = Grupos_Usuarios.grupos_id',
                    ],
                    'Controladores_Grupos' => [
                        'table' => 'controladores_grupos',
                        'type' => 'INNER',
                        'conditions' => 'Grupos.id = Controladores_Grupos.grupos_id',
                    ],
                    'Controladores' => [
                        'table' => 'controladores',
                        'type' => 'INNER',
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
                        'conditions' => 'Controladores.id = Controladores_Grupos.controladores_id',
                    ],
                ]
            );
<<<<<<< HEAD
        debug($usuario);
        debug($query);
        debug(($request->session()->read()));
        die();
=======
        // debug($query);
>>>>>>> a9e474dd14c7c7ee5a6e45a879dbca2c5d5e315b
        if ($query->first()) {
            return true;
        }

        /**
         * Em caso de teste ou primeiros cadastros
         * modificar o 'true' por 'false'
         */
        return false;
    }
}

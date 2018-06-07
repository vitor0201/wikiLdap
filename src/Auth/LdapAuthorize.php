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
        $query    = $usuarios
            ->find()
            ->where(
                [
                    'Usuarios.nome LIKE'            => $usuario,
                    'Controladores.controller LIKE' => $controller,
                    'Controladores.action LIKE'     => $action,
                    'Controladores.ativo'           => true,
                ]
            )
            ->join(
                [
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
                        'conditions' => 'Controladores.id = Controladores_Grupos.controladores_id',
                    ],
                ]
            );
        debug($usuario);
        debug($query);
        debug(($request->session()->read()));
        die();
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

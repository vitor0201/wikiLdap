<?php
use Migrations\AbstractSeed;

/**
 * Controladores seed.
 */
class ControladoresSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = 
        [   
            //GRUPOS
            [
            'controller' => 'Grupos',
            'action' => 'index',
            'descricao' => 'Grupos - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Grupos',
            'action' => 'add',
            'descricao' => 'Grupos - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Grupos',
            'action' => 'view',
            'descricao' => 'Grupos - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Grupos',
            'action' => 'edit',
            'descricao' => 'Grupos - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Grupos',
            'action' => 'delete',
            'descricao' => 'Grupos - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            //MIMES
            [
            'controller' => 'Mimes',
            'action' => 'index',
            'descricao' => 'Mimes - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Mimes',
            'action' => 'add',
            'descricao' => 'Mimes - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Mimes',
            'action' => 'view',
            'descricao' => 'Mimes - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Mimes',
            'action' => 'edit',
            'descricao' => 'Mimes - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Mimes',
            'action' => 'delete',
            'descricao' => 'Mimes - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // PÁGINAS
            [
            'controller' => 'Paginas',
            'action' => 'index',
            'descricao' => 'Paginas - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Paginas',
            'action' => 'add',
            'descricao' => 'Paginas - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Paginas',
            'action' => 'view',
            'descricao' => 'Paginas - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Paginas',
            'action' => 'edit',
            'descricao' => 'Paginas - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
            ],
            [
            'controller' => 'Paginas',
            'action' => 'delete',
            'descricao' => 'Paginas - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Paginas',
            'action' => 'delete',
            'descricao' => 'Paginas - Home',
            'ativo' => TRUE,
            'publico' => TRUE,
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // MENUS
            [
            'controller' => 'Menus',
            'action' => 'index',
            'descricao' => 'Menus - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Menus',
            'action' => 'add',
            'descricao' => 'Menus - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Menus',
            'action' => 'view',
            'descricao' => 'Menus - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Menus',
            'action' => 'edit',
            'descricao' => 'Menus - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Menus',
            'action' => 'delete',
            'descricao' => 'Menus - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // Parâmetros
            [
            'controller' => 'Parametros',
            'action' => 'index',
            'descricao' => 'Parametros - Index',
            'ativo' => TRUE,
            'publico' => TRUE,
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Parametros',
            'action' => 'add',
            'descricao' => 'Parametros - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Parametros',
            'action' => 'view',
            'descricao' => 'Parametros - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Parametros',
            'action' => 'edit',
            'descricao' => 'Parametros - Edit',
            'ativo' => TRUE,
            'publico' => TRUE,
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Parametros',
            'action' => 'delete',
            'descricao' => 'Parametros - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // RAMAIS
            [
            'controller' => 'Ramais',
            'action' => 'index',
            'descricao' => 'Ramais - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Ramais',
            'action' => 'index',
            'descricao' => 'Ramais - Home',
            'ativo' => TRUE,
            'publico' => TRUE,
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
            ],
            [
            'controller' => 'Ramais',
            'action' => 'add',
            'descricao' => 'Ramais - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Ramais',
            'action' => 'view',
            'descricao' => 'Ramais - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Ramais',
            'action' => 'edit',
            'descricao' => 'Ramais - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Ramais',
            'action' => 'delete',
            'descricao' => 'Ramais - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // Subcategorias
            [
            'controller' => 'Subcategorias',
            'action' => 'index',
            'descricao' => 'Subcategorias - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Subcategorias',
            'action' => 'add',
            'descricao' => 'Subcategorias - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Subcategorias',
            'action' => 'view',
            'descricao' => 'Subcategorias - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Subcategorias',
            'action' => 'edit',
            'descricao' => 'Subcategorias - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Subcategorias',
            'action' => 'delete',
            'descricao' => 'Subcategorias - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
            ],
            // cATEGORIAS
            [
            'controller' => 'Categorias',
            'action' => 'index',
            'descricao' => 'Categorias - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Categorias',
            'action' => 'add',
            'descricao' => 'Categorias - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Categorias',
            'action' => 'view',
            'descricao' => 'Categorias - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Categorias',
            'action' => 'edit',
            'descricao' => 'Categorias - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Categorias',
            'action' => 'delete',
            'descricao' => 'Categorias - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // Controladores
            [
            'controller' => 'Controladores',
            'action' => 'index',
            'descricao' => 'Controladores - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Controladores',
            'action' => 'add',
            'descricao' => 'Controladores - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Controladores',
            'action' => 'view',
            'descricao' => 'Controladores - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Controladores',
            'action' => 'edit',
            'descricao' => 'Controladores - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Controladores',
            'action' => 'delete',
            'descricao' => 'Controladores - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // Formatos
            [
            'controller' => 'Formatos',
            'action' => 'index',
            'descricao' => 'Formatos - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Formatos',
            'action' => 'add',
            'descricao' => 'Formatos - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Formatos',
            'action' => 'view',
            'descricao' => 'Formatos - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Formatos',
            'action' => 'edit',
            'descricao' => 'Formatos - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Formatos',
            'action' => 'delete',
            'descricao' => 'Formatos - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // Tags
            [
            'controller' => 'Tags',
            'action' => 'index',
            'descricao' => 'Tags - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Tags',
            'action' => 'add',
            'descricao' => 'Tags - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Tags',
            'action' => 'view',
            'descricao' => 'Tags - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Tags',
            'action' => 'edit',
            'descricao' => 'Tags - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Tags',
            'action' => 'delete',
            'descricao' => 'Tags - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // Usuarios
            [
            'controller' => 'Usuarios',
            'action' => 'index',
            'descricao' => 'Usuarios - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Usuarios',
            'action' => 'add',
            'descricao' => 'Usuarios - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Usuarios',
            'action' => 'view',
            'descricao' => 'Usuarios - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Usuarios',
            'action' => 'edit',
            'descricao' => 'Usuarios - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Usuarios',
            'action' => 'delete',
            'descricao' => 'Usuarios - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // Superiores
            [
            'controller' => 'Superiores',
            'action' => 'index',
            'descricao' => 'Superiores - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Superiores',
            'action' => 'add',
            'descricao' => 'Superiores - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Superiores',
            'action' => 'view',
            'descricao' => 'Superiores - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Superiores',
            'action' => 'edit',
            'descricao' => 'Superiores - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Superiores',
            'action' => 'delete',
            'descricao' => 'Superiores - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            // Arquivos
            [
            'controller' => 'Arquivos',
            'action' => 'index',
            'descricao' => 'Arquivos - Index',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Arquivos',
            'action' => 'add',
            'descricao' => 'Arquivos - Add',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Arquivos',
            'action' => 'view',
            'descricao' => 'Arquivos - View',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Arquivos',
            'action' => 'edit',
            'descricao' => 'Arquivos - Edit',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
            [
            'controller' => 'Arquivos',
            'action' => 'delete',
            'descricao' => 'Arquivos - Delete',
            'ativo' => TRUE,
            'publico' => "FALSE",
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s") 
            ],
        ];

        $table = $this->table('controladores');
        $table->insert($data)->save();
    }
}

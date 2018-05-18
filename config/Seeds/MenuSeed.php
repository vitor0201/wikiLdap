<?php
use Migrations\AbstractSeed;

/**
 * Menu seed.
 */
class MenuSeed extends AbstractSeed
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
        $data = [
            [
                'nome' => 'Arquivos', 
                'ativo' => TRUE, 
                'icone'=>  'file', 
                'home' => 'arquivos', 
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s") 
            ],
            [
                'nome' => 'Categorias',
                'ativo' => TRUE,
                'icone' => 'clone',
                'home' => 'categorias',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s") 
            ],
            [
                'nome' => 'Controladores',
                'ativo' => TRUE,
                'icone' => 'laptop',
                'home' => 'controladores',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s") 
            ],
            [
                'nome' => 'Grupos',
                'ativo' => TRUE,
                'icone' => 'group',
                'home' => 'grupos',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s") 
            ],
            [
                'nome' => 'Menus',
                'ativo' => TRUE,
                'icone' => 'bars',
                'home' => 'menus',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s") 
            ],
            [
                'nome' => 'Formatos',
                'ativo' => TRUE,
                'icone' => 'circle',
                'home' => 'mimes',
                'submenu' => "FALSE" ,
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s")
            ],
            [
                'nome' => 'Paginas',
                'ativo' => TRUE,
                'icone' => 'at',
                'home' => 'paginas',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s") 
            ],
            [
                'nome' => 'Wiki',
                'ativo' => TRUE,
                'icone' => 'wikipedia-w',
                'home' => 'paginas/home',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s")
            ],
            [
                'nome' => 'Parâmetros',
                'ativo' => TRUE,
                'icone' => 'wrench',
                'home' => 'parametros',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s") 
            ],
            [
                'nome' => 'Tags',
                'ativo' => TRUE,
                'icone' => 'tags',
                'home' => 'tags',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s") 
            ],
            [
                'nome' => 'Usuarios',
                'ativo' => TRUE,
                'icone' => 'users',
                'home' => 'usuarios',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s")
            ],
            [
                'nome' => 'Ramais',
                'ativo' => TRUE,
                'icone' => 'phone',
                'home' => 'ramais',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s")
            ],
            [
                'nome' => 'Ramais',
                'ativo' => TRUE,
                'icone' => 'phone',
                'home' => 'ramais/home',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s")
            ],
            [
                'nome' => 'Home',
                'ativo' => TRUE,
                'icone' => 'cubes',
                'home' => 'sistemas/home',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s")
            ],
            [
                'nome' => 'Sistemas',
                'ativo' => TRUE,
                'icone' => 'cubes',
                'home' => 'sistemas',
                'submenu' => "FALSE",
                'created' => date("Y-m-d H:i:s"),
                'modified' => date("Y-m-d H:i:s")
            ],
        ];

        $table = $this->table('menus');
        $table->insert($data)->save();
    }
}

<?php
use Migrations\AbstractMigration;

class CreatePaginasUsuarios extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('paginas_usuarios');
        $table->addColumn('paginas_id', 'integer');
        $table->addColumn('usuarios_id', 'integer');   
        $table->addColumn('created', 'timestamp',
        [
            'default' => 'CURRENT_TIMESTAMP'
        ]);    
        $table->addForeignKey('paginas_id', 'paginas', 'id');
        $table->addForeignKey('usuarios_id', 'usuarios', 'id');
        $table->create();
    }

}

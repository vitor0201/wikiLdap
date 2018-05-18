<?php
use Migrations\AbstractMigration;

class CreateGruposUsuarios extends AbstractMigration
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
        $table = $this->table('grupos_usuarios');
        $table->addColumn('usuarios_id', 'integer');
        $table->addColumn('grupos_id', 'integer');       
        $table->addForeignKey('usuarios_id', 'usuarios', 'id');
        $table->addForeignKey('grupos_id', 'grupos', 'id');

        $table->create();
    }
}

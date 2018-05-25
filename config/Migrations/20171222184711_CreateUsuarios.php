<?php
use Migrations\AbstractMigration;

class CreateUsuarios extends AbstractMigration
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
        $table = $this->table('usuarios');

        $table->addColumn('nome', 'string');
        $table->addColumn('ativo', 'boolean');
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');

        $table->create();
    }
}

<?php
use Migrations\AbstractMigration;

class CreateControladores extends AbstractMigration
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
        $table = $this->table('controladores');

        $table->addColumn('controller', 'string');
        $table->addColumn('action', 'string');
        $table->addColumn('descricao', 'string');
        $table->addColumn('ativo', 'boolean');
        $table->addColumn('publico', 'boolean');
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');

        $table->create();
    }
}

<?php
use Migrations\AbstractMigration;

class CreateGrupos extends AbstractMigration
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
        $table = $this->table('grupos');
        $table->addColumn('descricao', 'string');
        $table->addColumn('atividade', 'string');
        $table->addColumn('sigla', 'string');
        $table->addColumn('ativo', 'boolean');
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->create();
    }
}

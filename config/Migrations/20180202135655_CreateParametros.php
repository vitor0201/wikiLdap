<?php
use Migrations\AbstractMigration;

class CreateParametros extends AbstractMigration
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
        $table = $this->table('parametros');
        $table->addColumn('descricao', 'string');
        $table->addColumn('chave', 'string');
        $table->addColumn('valor', 'string');
        $table->addColumn('tipo', 'string');
        $table->addColumn('ativo', 'boolean');
        $table->addColumn('cache', 'boolean');
        $table->addColumn('grupo', 'string');
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->create();
    }
}

<?php
use Migrations\AbstractMigration;

class CreateArquivos extends AbstractMigration
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
        $table = $this->table('arquivos');

        $table->addColumn('categoria_id', 'integer');
        $table->addColumn('titulo', 'string');
        $table->addColumn('autor', 'string');
        $table->addColumn('descricao', 'text');
        $table->addColumn('ativo', 'boolean');
        $table->addColumn('arquivo_caminho', 'string');
        $table->addColumn('arquivo_tipo', 'string');
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->addForeignKey('categoria_id', 'categorias', 'id');

        $table->create();
    }
}

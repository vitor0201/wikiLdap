<?php
use Migrations\AbstractMigration;

class CreateSubcategoria extends AbstractMigration
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
        $table = $this->table('subcategorias');

        $table->addColumn('descricao', 'string');
        $table->addColumn('ativo', 'boolean');
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->addColumn('categorias_id', 'integer');
        $table->addForeignKey('categorias_id', 'categorias', 'id');
        $table->create();
    }
}

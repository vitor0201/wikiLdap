<?php
use Migrations\AbstractMigration;

class CreatePaginas extends AbstractMigration
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
        $table = $this->table('paginas');
        $table->addColumn('title', 'string');
        $table->addColumn('url', 'string');
        $table->addColumn('body', 'text');
        $table->addColumn('active', 'boolean');
        $table->addColumn('created', 'timestamp',
        [
            'default' => 'CURRENT_TIMESTAMP'
        ]);
        $table->addColumn('modified', 'datetime',
        [
            'default' => null,
            'null' => true
        ]);
        $table->addColumn('subcategoria_id', 'integer');
        $table->addForeignKey('subcategoria_id', 'subcategorias', 'id');
        $table->create();
    }
}

<?php
use Migrations\AbstractMigration;

class CreateGruposCategorias extends AbstractMigration
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
        $table = $this->table('grupos_categorias');

        $table->addColumn('categoria_id', 'integer');
        $table->addColumn('grupo_id', 'integer');
        $table->addForeignKey('categoria_id', 'categorias', 'id');
        $table->addForeignKey('grupo_id', 'grupos', 'id');

        $table->create();
    }
}

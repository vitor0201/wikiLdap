<?php
use Migrations\AbstractMigration;

class CreateMenusGrupos extends AbstractMigration
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
        $table = $this->table('menus_grupos');

        $table->addColumn('menus_id', 'integer');
        $table->addColumn('grupos_id', 'integer');
        $table->addForeignKey('menus_id', 'menus', 'id');
        $table->addForeignKey('grupos_id', 'grupos', 'id');

        $table->create();
    }
}

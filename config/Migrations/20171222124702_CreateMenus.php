<?php
use Migrations\AbstractMigration;

class CreateMenus extends AbstractMigration
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
        $table = $this->table('menus');
        $table->addColumn('nome', 'string');
        $table->addColumn('ativo', 'boolean');
        $table->addColumn('icone', 'string');
        $table->addColumn('home', 'string');
        $table->addColumn('publico', 'boolean', ['null' => true]);
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        $table->addColumn('superiores_id', 'integer', ['null' => true]);
        $table->addForeignKey('superiores_id', 'superiores', 'id');
        $table->create();
    }
}

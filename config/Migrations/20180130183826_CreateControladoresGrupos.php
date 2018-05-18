<?php
use Migrations\AbstractMigration;

class CreateControladoresGrupos extends AbstractMigration
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
        $table = $this->table('controladores_grupos');
        $table->addColumn('controladores_id', 'integer');
        $table->addColumn('grupos_id', 'integer');       
        $table->addForeignKey('controladores_id', 'controladores', 'id');
        $table->addForeignKey('grupos_id', 'grupos', 'id');

        $table->create();
    }
}

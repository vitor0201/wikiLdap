<?php
use Migrations\AbstractMigration;

class CreateSuperiores extends AbstractMigration
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
        $table = $this->table('superiores');
        $table->addColumn('nome', 'string' );
        $table->addColumn('icone', 'string' );
        $table->create();
    }
}

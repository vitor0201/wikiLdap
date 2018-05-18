<?php
use Migrations\AbstractMigration;

class CreateRamais extends AbstractMigration
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
        $table = $this->table('ramais');
        $table->addColumn('setor', 'string' );
        $table->addColumn('ramal', 'integer', ['limit' => 4],['unique' => true]);
        $table->create();
    }
}

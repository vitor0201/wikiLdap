<?php
use Migrations\AbstractMigration;

class CreateMimes extends AbstractMigration
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
        $table = $this->table('mimes');

        $table->addColumn('extensao', 'string');
        $table->addColumn('mime', 'string');
        $table->addColumn('ativo', 'boolean', ['null' => true]);
        $table->create();
    }
}

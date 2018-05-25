<?php
use Migrations\AbstractMigration;

class CreateTags extends AbstractMigration
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
        $table = $this->table('tags');

        $table->addColumn('descricao', 'string');
        $table->addColumn('ativo', 'boolean');
        $table->addColumn('created', 'datetime');
        $table->addColumn('modified', 'datetime');
        
        $table->create();
    }
}

<?php
use Migrations\AbstractMigration;

class CreateTagsPaginas extends AbstractMigration
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
        $table = $this->table('tags_paginas');
        $table->addColumn('paginas_id', 'integer');
        $table->addColumn('tags_id', 'integer');       
        $table->addForeignKey('paginas_id', 'paginas', 'id');
        $table->addForeignKey('tags_id', 'tags', 'id');

        $table->create();
    }
}

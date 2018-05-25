<?php
use Migrations\AbstractMigration;

class CreateArquivosTags extends AbstractMigration
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
        $table = $this->table('arquivos_tags');

        $table->addColumn('arquivos_id', 'integer');
        $table->addColumn('tags_id', 'integer');
        $table->addForeignKey('arquivos_id', 'arquivos', 'id');
        $table->addForeignKey('tags_id', 'tags', 'id');

        $table->create();

    }
}

<?php
use Migrations\AbstractMigration;

class CreateSistemas extends AbstractMigration
{
    /**
     * Change Method., ['null' => true]
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('sistemas');
        $table->addColumn('nome', 'string', ['limit' => 40]);
        $table->addColumn('descricao', 'string');
        $table->addColumn('botao_um', 'string', ['null' => true]);
        $table->addColumn('botao_dois', 'string', ['null' => true]);
        $table->addColumn('url', 'string');
        $table->addColumn('botao_um_descricao', 'string', ['limit' => 10,'null' => true]);
        $table->addColumn('botao_dois_descricao', 'string', ['limit' => 10,'null' => true]);
        $table->addColumn('logo', 'string');

        $table->create();
    }
}

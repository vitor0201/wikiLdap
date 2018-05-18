<?php
use Migrations\AbstractSeed;

/**
 * Parametros seed.
 */
class ParametrosSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'descricao'  => 'account_suffix',
            'chave'  => 'account_suffix',
            'valor' => '@valor.local',
            'tipo' => 'string',
            'ativo' => TRUE,
            'cache' => TRUE,
            'grupo' => 'LDAP',
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
        ],
        [
            'descricao'  => 'domain_controllers',
            'chave'  => 'domain_controllers',
            'valor' => 'valor.local',
            'tipo' => 'string',
            'ativo' => TRUE,
            'cache' => TRUE,
            'grupo' => 'LDAP',
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
        ],
        [
            'descricao'  => 'base_dn',
            'chave'  => 'base_dn',
            'valor' => 'ou=valor,dc=valor, dc=valor',
            'tipo' => 'string',
            'ativo' => TRUE,
            'cache' => TRUE,
            'grupo' => 'LDAP',
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
        ],
        [
            'descricao'  => 'port',
            'chave'  => 'port',
            'valor' => '389',
            'tipo' => 'string',
            'ativo' => TRUE,
            'cache' => TRUE,
            'grupo' => 'LDAP',
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
        ],                
        [
            'descricao'  => 'admin_username',
            'chave'  => 'admin_username',
            'valor' => 'valor.ad',
            'tipo' => 'string',
            'ativo' => TRUE,
            'cache' => TRUE,
            'grupo' => 'LDAP',
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
        ],                
        [
            'descricao'  => 'admin_password',
            'chave'  => 'admin_password',
            'valor' => 'valor',
            'tipo' => 'string',
            'ativo' => TRUE,
            'cache' => TRUE,
            'grupo' => 'LDAP',
            'created' => date("Y-m-d H:i:s"),
            'modified' => date("Y-m-d H:i:s")
        ]];

        $table = $this->table('parametros');
        $table->insert($data)->save();
    }
}

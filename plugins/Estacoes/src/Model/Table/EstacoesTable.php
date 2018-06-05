<?php
namespace Wifi\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Wifi\Model\Entity\Estacao;

/**
 * Estacoes Model
 *
 */
class EstacoesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */

    public static function defaultConnectionName() {
        return 'sispe';
    }
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('ponto.estacoes');
       // $this->displayField('IP');
      //$this->primaryKey('IP');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
        ->add('IP', 'validIp',[
            'rule' => array('custom', '/(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])/'),
            'message' => 'Endereço IP inválido.'
            ])
        ->requirePresence('IP', 'create')
        ->requirePresence('IP', 'update')
        ->notEmpty('IP','Campo obrigatório.');

        $validator
            ->add('liberaSistema', 'valid', ['rule' => 'boolean'])
            ->requirePresence('liberaSistema', 'create')
            ->notEmpty('liberaSistema','Campo obrigatório.');

        $validator
            ->add('biometria', 'valid', ['rule' => 'boolean'])
            ->requirePresence('biometria', 'create')
            ->notEmpty('biometria','Campo obrigatório.');

        $validator
            ->add('liberaAcessoAdministrativo', 'valid', ['rule' => 'boolean'])
            ->requirePresence('liberaAcessoAdministrativo', 'create')
            ->notEmpty('liberaAcessoAdministrativo','Campo obrigatório.');

        return $validator;
    }
}

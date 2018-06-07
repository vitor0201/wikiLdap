<?php
namespace Estacoes\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estacoes Model
 *
 * @method \Estacoes\Model\Entity\Estaco get($primaryKey, $options = [])
 * @method \Estacoes\Model\Entity\Estaco newEntity($data = null, array $options = [])
 * @method \Estacoes\Model\Entity\Estaco[] newEntities(array $data, array $options = [])
 * @method \Estacoes\Model\Entity\Estaco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Estacoes\Model\Entity\Estaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Estacoes\Model\Entity\Estaco[] patchEntities($entities, array $data, array $options = [])
 * @method \Estacoes\Model\Entity\Estaco findOrCreate($search, callable $callback = null, $options = [])
 */
class EstacoesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ponto.estacoes');
        $this->setDisplayField('IP');
        $this->setPrimaryKey('IP');
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
            ->scalar('IP')
            ->maxLength('IP', 50)
            ->allowEmpty('IP', 'create');

        $validator
            ->boolean('liberaSistema')
            ->requirePresence('liberaSistema', 'create')
            ->notEmpty('liberaSistema');

        $validator
            ->boolean('biometria')
            ->requirePresence('biometria', 'create')
            ->notEmpty('biometria');

        $validator
            ->boolean('liberaAcessoAdministrativo')
            ->requirePresence('liberaAcessoAdministrativo', 'create')
            ->notEmpty('liberaAcessoAdministrativo');

        return $validator;
    }
}

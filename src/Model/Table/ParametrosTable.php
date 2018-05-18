<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parametros Model
 *
 * @method \App\Model\Entity\Parametro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parametro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parametro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parametro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parametro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parametro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parametro findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParametrosTable extends Table
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

        $this->setTable('wiki.parametros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->scalar('chave')
            ->maxLength('chave', 255)
            ->requirePresence('chave', 'create')
            ->notEmpty('chave');

        $validator
            ->scalar('valor')
            ->maxLength('valor', 255)
            ->requirePresence('valor', 'create')
            ->notEmpty('valor');

        $validator
            ->scalar('tipo')
            ->maxLength('tipo', 255)
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->boolean('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

        $validator
            ->boolean('cache')
            ->requirePresence('cache', 'create')
            ->notEmpty('cache');

        $validator
            ->scalar('grupo')
            ->maxLength('grupo', 255)
            ->requirePresence('grupo', 'create')
            ->notEmpty('grupo');

        return $validator;
    }
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['chave'], 'Chave Duplicada!'));
        return $rules;
    }
}

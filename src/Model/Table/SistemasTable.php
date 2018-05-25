<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sistemas Model
 *
 * @method \App\Model\Entity\Sistema get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sistema newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sistema[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sistema|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sistema patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sistema[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sistema findOrCreate($search, callable $callback = null, $options = [])
 */
class SistemasTable extends Table
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

        $this->setTable('wiki.sistemas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nome')
            ->maxLength('nome', 40)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->scalar('botao_um')
            ->maxLength('botao_um', 255)
            ->allowEmpty('botao_um');

        $validator
            ->scalar('botao_dois')
            ->maxLength('botao_dois', 255)
            ->allowEmpty('botao_dois');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->scalar('botao_um_descricao')
            ->maxLength('botao_um_descricao', 10)
            ->allowEmpty('botao_um_descricao');

        $validator
            ->scalar('botao_dois_descricao')
            ->maxLength('botao_dois_descricao', 10)
            ->allowEmpty('botao_dois_descricao');

        $validator
            ->scalar('logo')
            ->maxLength('logo', 255)
            ->requirePresence('logo', 'create')
            ->notEmpty('logo');

        return $validator;
    }
}

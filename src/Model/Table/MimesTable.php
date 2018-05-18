<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Mimes Model
 *
 * @method \App\Model\Entity\Mime get($primaryKey, $options = [])
 * @method \App\Model\Entity\Mime newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Mime[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Mime|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Mime patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Mime[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Mime findOrCreate($search, callable $callback = null, $options = [])
 */
class MimesTable extends Table
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

        $this->setTable('wiki.mimes');
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
            ->scalar('extensao')
            ->maxLength('extensao', 255)
            ->requirePresence('extensao', 'create')
            ->notEmpty('extensao');

        $validator
            ->scalar('mime')
            ->maxLength('mime', 255)
            ->requirePresence('mime', 'create')
            ->notEmpty('mime');

        $validator
            ->boolean('ativo')
            ->allowEmpty('ativo');

        return $validator;
    }
}

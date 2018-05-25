<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Superiores Model
 *
 * @method \App\Model\Entity\Superiore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Superiore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Superiore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Superiore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Superiore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Superiore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Superiore findOrCreate($search, callable $callback = null, $options = [])
 */
class SuperioresTable extends Table
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

        $this->setTable('wiki.superiores');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');
        
        $this->hasMany('Menus')->setForeignKey('superior_id');
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
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('icone')
            ->maxLength('icone', 255)
            ->requirePresence('icone', 'create')
            ->notEmpty('icone');

        return $validator;
    }
}

<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ramais Model
 *
 * @method \App\Model\Entity\Ramai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ramai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ramai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ramai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ramai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ramai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ramai findOrCreate($search, callable $callback = null, $options = [])
 */
class RamaisTable extends Table
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

        $this->setTable('wiki.ramais');
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
            ->scalar('setor')
            ->maxLength('setor', 255)
            ->requirePresence('setor', 'create')
            ->notEmpty('setor');

        $validator
            ->integer('ramal')
            ->lengthBetween('ramal', [4,4], 'Por favor digite 04 caracteres.')
            ->requirePresence('ramal', 'create')
            ->notEmpty('ramal');

        return $validator;
    }
}

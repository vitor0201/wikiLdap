<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ClinicaMedica Model
 *
 * @method \App\Model\Entity\ClinicaMedica get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClinicaMedica newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClinicaMedica[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClinicaMedica|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClinicaMedica patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClinicaMedica[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClinicaMedica findOrCreate($search, callable $callback = null, $options = [])
 */
class ClinicaMedicaTable extends Table
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

        $this->setTable('wiki.clinica_medica');
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

        return $validator;
    }
}

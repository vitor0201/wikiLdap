<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Controladores Model
 *
 * @property \App\Model\Table\GruposTable|\Cake\ORM\Association\BelongsToMany $Grupos
 *
 * @method \App\Model\Entity\Controladore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Controladore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Controladore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Controladore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Controladore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Controladore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Controladore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ControladoresTable extends Table
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

        $this->setTable('wiki.controladores');
        $this->setDisplayField('descricao');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Grupos', [
            'foreignKey' => 'controladores_id',
            'targetForeignKey' => 'grupos_id',
            'joinTable' => 'controladores_grupos'
        ]);
        
        $this->belongsTo('Controls', [
            'className' => 'Controladores',
            'foreignKey' => 'controller',
            'bindingKey' => 'controller',
        ]);

        $this->addBehavior('Search.Search');

        $this->searchManager()
        ->add('controller', 'Search.Like', [
            'before' => true,
            'after' => true,
            'mode' => 'or',
            'comparison' => 'LIKE',
            'wildcardAny' => '*',
            'wildcardOne' => '?',
            'multiValue' => true,
            'field' => ['controller']
        ])
        ->add('controller', 'Search.Like', [
            'before' => true,
            'after' => true,
            'mode' => 'or',
            'comparison' => 'LIKE',
            'wildcardAny' => '*',
            'wildcardOne' => '?',
            'multiValue' => true,
            'field' => ['action']
        ]);
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
            ->scalar('controller')
            ->maxLength('controller', 255)
            ->requirePresence('controller', 'create')
            ->notEmpty('controller');

        $validator
            ->scalar('action')
            ->maxLength('action', 255)
            ->requirePresence('action', 'create')
            ->notEmpty('action');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->boolean('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

        $validator
            ->boolean('publico')
            ->requirePresence('publico', 'create')
            ->notEmpty('publico');

        return $validator;
    }
}

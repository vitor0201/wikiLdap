<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Paginas Model
 *
 * @property \App\Model\Table\SubcategoriasTable|\Cake\ORM\Association\BelongsTo $Subcategorias
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsToMany $Usuarios
 * @property \App\Model\Table\TagsTable|\Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Pagina get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pagina newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Pagina[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pagina|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pagina patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pagina[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pagina findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PaginasTable extends Table
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

        $this->setTable('wiki.paginas');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Sluggable');
        
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'paginas_id',
            'targetForeignKey' => 'usuarios_id',
            'joinTable' => 'paginas_usuarios',
            'saveStrategy' =>  'append'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'paginas_id',
            'targetForeignKey' => 'tags_id',
            'joinTable' => 'tags_paginas'
        ]);
        $this->belongsTo('Subcategorias', [
            'foreignKey' => 'subcategoria_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('PaginasUsuarios',[
            'foreignKey' => 'paginas_id'
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
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->scalar('url')
            ->maxLength('url', 255)
            ->requirePresence('url', 'create')
            ->notEmpty('url');

        $validator
            ->scalar('body')
            ->requirePresence('body', 'create')
            ->notEmpty('body');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['subcategoria_id'], 'Subcategorias'));

        return $rules;
    }
}

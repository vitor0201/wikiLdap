<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grupos Model
 *
 * @property \App\Model\Table\ControladoresTable|\Cake\ORM\Association\BelongsToMany $Controladores
 * @property \App\Model\Table\CategoriasTable|\Cake\ORM\Association\BelongsToMany $Categorias
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsToMany $Usuarios
 * @property \App\Model\Table\MenusTable|\Cake\ORM\Association\BelongsToMany $Menus
 *
 * @method \App\Model\Entity\Grupo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grupo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grupo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grupo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grupo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grupo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grupo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GruposTable extends Table
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

        $this->setTable('wiki.grupos');
        $this->setDisplayField('sigla');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Controladores', [
            'foreignKey' => 'grupos_id',
            'targetForeignKey' => 'controladores_id',
            'joinTable' => 'controladores_grupos'
        ]);
        $this->belongsToMany('Categorias', [
            'foreignKey' => 'grupo_id',
            'targetForeignKey' => 'categoria_id',
            'joinTable' => 'grupos_categorias'
        ]);
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'grupos_id',
            'targetForeignKey' => 'usuarios_id',
            'joinTable' => 'grupos_usuarios'
        ]);
        $this->belongsToMany('Menus', [
            'foreignKey' => 'grupo_id',
            'targetForeignKey' => 'menu_id',
            'joinTable' => 'menus_grupos',
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->scalar('atividade')
            ->maxLength('atividade', 255)
            ->requirePresence('atividade', 'create')
            ->notEmpty('atividade');

        $validator
            ->scalar('sigla')
            ->maxLength('sigla', 255)
            ->requirePresence('sigla', 'create')
            ->notEmpty('sigla');

        $validator
            ->boolean('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

        return $validator;
    }
}

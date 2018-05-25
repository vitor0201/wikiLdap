<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ArquivosTags Model
 *
 * @property \App\Model\Table\ArquivosTable|\Cake\ORM\Association\BelongsTo $Arquivos
 * @property \App\Model\Table\TagsTable|\Cake\ORM\Association\BelongsTo $Tags
 *
 * @method \App\Model\Entity\ArquivosTag get($primaryKey, $options = [])
 * @method \App\Model\Entity\ArquivosTag newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ArquivosTag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ArquivosTag|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ArquivosTag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ArquivosTag[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ArquivosTag findOrCreate($search, callable $callback = null, $options = [])
 */
class ArquivosTagsTable extends Table
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

        $this->setTable('wiki.arquivos_tags');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Arquivos', [
            'foreignKey' => 'arquivos_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tags', [
            'foreignKey' => 'tags_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['arquivos_id'], 'Arquivos'));
        $rules->add($rules->existsIn(['tags_id'], 'Tags'));

        return $rules;
    }
}

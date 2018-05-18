<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Parametro Entity
 *
 * @property int $id
 * @property string $descricao
 * @property string $chave
 * @property string $valor
 * @property string $tipo
 * @property bool $ativo
 * @property bool $cache
 * @property string $grupo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Parametro extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'descricao' => true,
        'chave' => true,
        'valor' => true,
        'tipo' => true,
        'ativo' => true,
        'cache' => true,
        'grupo' => true,
        'created' => true,
        'modified' => true
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property int $id
 * @property string $nome
 * @property bool $ativo
 * @property string $icone
 * @property string $home
 * @property bool $publico
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $superior_id
 *
 * @property \App\Model\Entity\Superiore $superiore
 * @property \App\Model\Entity\Grupo[] $grupos
 */
class Menu extends Entity
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
        'nome' => true,
        'ativo' => true,
        'icone' => true,
        'home' => true,
        'publico' => true,
        'created' => true,
        'modified' => true,
        'superior_id' => true,
        'superiore' => true,
        'grupos' => true
    ];
}

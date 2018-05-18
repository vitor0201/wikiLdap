<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ControladoresGrupo Entity
 *
 * @property int $id
 * @property int $controladores_id
 * @property int $grupos_id
 *
 * @property \App\Model\Entity\Controladore $controladore
 * @property \App\Model\Entity\Grupo $grupo
 */
class ControladoresGrupo extends Entity
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
        'controladores_id' => true,
        'grupos_id' => true,
        'controladore' => true,
        'grupo' => true
    ];
}

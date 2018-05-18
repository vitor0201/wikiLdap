<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GruposUsuario Entity
 *
 * @property int $id
 * @property int $usuarios_id
 * @property int $grupos_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Grupo $grupo
 */
class GruposUsuario extends Entity
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
        'usuarios_id' => true,
        'grupos_id' => true,
        'usuario' => true,
        'grupo' => true
    ];
}

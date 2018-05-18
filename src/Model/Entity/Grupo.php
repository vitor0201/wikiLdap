<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grupo Entity
 *
 * @property int $id
 * @property string $descricao
 * @property string $atividade
 * @property string $sigla
 * @property bool $ativo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Controladore[] $controladores
 * @property \App\Model\Entity\Categoria[] $categorias
 * @property \App\Model\Entity\Usuario[] $usuarios
 * @property \App\Model\Entity\Menu[] $menus
 */
class Grupo extends Entity
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
        'atividade' => true,
        'sigla' => true,
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'controladores' => true,
        'categorias' => true,
        'usuarios' => true,
        'menus' => true
    ];
}

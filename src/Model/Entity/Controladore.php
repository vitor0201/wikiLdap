<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Controladore Entity
 *
 * @property int $id
 * @property string $controller
 * @property string $action
 * @property string $descricao
 * @property bool $ativo
 * @property bool $publico
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Grupo[] $grupos
 */
class Controladore extends Entity
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
        'controller' => true,
        'action' => true,
        'descricao' => true,
        'ativo' => true,
        'publico' => true,
        'created' => true,
        'modified' => true,
        'grupos' => true
    ];

    protected function _setController($controller){
        $controller = strtolower($controller);
        return ucwords($controller); 
   }
}

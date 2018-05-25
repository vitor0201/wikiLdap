<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property bool $ativo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Grupo[] $grupos
 * @property \App\Model\Entity\Pagina[] $paginas
 */
class Usuario extends Entity
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
        'created' => true,
        'modified' => true,
        'grupos' => true,
        'paginas' => true
    ];

    protected $_hidden = [
        'senha' 
    ];
    protected function _setPassword($senha){

        return (new DefaultPasswordHasher)->hash($senha);
    }
}

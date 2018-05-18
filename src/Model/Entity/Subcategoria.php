<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Subcategoria Entity
 *
 * @property int $id
 * @property string $descricao
 * @property bool $ativo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $categorias_id
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Pagina[] $paginas
 */
class Subcategoria extends Entity
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
        'ativo' => true,
        'created' => true,
        'modified' => true,
        'categorias_id' => true,
        'categoria' => true,
        'paginas' => true
    ];
}

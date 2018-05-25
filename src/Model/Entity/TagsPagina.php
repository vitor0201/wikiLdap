<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TagsPagina Entity
 *
 * @property int $id
 * @property int $paginas_id
 * @property int $tags_id
 *
 * @property \App\Model\Entity\Pagina $pagina
 * @property \App\Model\Entity\Tag $tag
 */
class TagsPagina extends Entity
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
        'paginas_id' => true,
        'tags_id' => true,
        'pagina' => true,
        'tag' => true
    ];
}

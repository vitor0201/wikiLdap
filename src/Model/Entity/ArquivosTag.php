<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ArquivosTag Entity
 *
 * @property int $id
 * @property int $arquivos_id
 * @property int $tags_id
 *
 * @property \App\Model\Entity\Arquivo $arquivo
 * @property \App\Model\Entity\Tag $tag
 */
class ArquivosTag extends Entity
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
        'arquivos_id' => true,
        'tags_id' => true,
        'arquivo' => true,
        'tag' => true
    ];
}

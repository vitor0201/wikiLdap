<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

/**
 * Pagina Entity
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $body
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $subcategoria_id
 *
 * @property \App\Model\Entity\Subcategoria $subcategoria
 * @property \App\Model\Entity\Usuario[] $usuarios
 * @property \App\Model\Entity\Tag[] $tags
 */
class Pagina extends Entity
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
        'title' => true,
        'url' => true,
        'body' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'subcategoria_id' => true,
        'subcategoria' => true,
        'usuarios' => true,
        'tags' => true
    ];

    protected function _setUrl($url){ 
        // debug($this->_properties);
        $url = Text::slug($this->_properties['title']);
        return strtolower($url);
    }
    protected function _getUsuarios($usuarios)
    {
        return $usuarios;
    }
    protected function _setUsuarios($usuario){ 
        return array($usuario);
    }
}

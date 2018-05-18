<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Arquivo Entity
 *
 * @property int $id
 * @property int $categoria_id
 * @property string $titulo
 * @property string $autor
 * @property string $descricao
 * @property bool $ativo
 * @property bool $arquivo_caminho
 * @property bool $arquivo_tipo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Tag[] $tags
 */
class Arquivo extends Entity
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
        'categoria_id' => true,
        'titulo' => true,
        'autor' => true,
        'descricao' => true,
        'ativo' => true,
        'arquivo_caminho' => true,
        'arquivo_tipo' => true,
        'created' => true,
        'modified' => true,
        'categoria' => true,
        'tags' => true
    ];
}

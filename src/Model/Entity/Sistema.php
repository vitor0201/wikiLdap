<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sistema Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property string $botao_um
 * @property string $botao_dois
 * @property string $url
 * @property string $botao_um_descricao
 * @property string $botao_dois_descricao
 * @property string $logo
 */
class Sistema extends Entity
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
        'descricao' => true,
        'botao_um' => true,
        'botao_dois' => true,
        'url' => true,
        'botao_um_descricao' => true,
        'botao_dois_descricao' => true,
        'logo' => true
    ];
}

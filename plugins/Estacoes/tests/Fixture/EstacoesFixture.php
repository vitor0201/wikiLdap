<?php
namespace Estacoes\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EstacoesFixture
 *
 */
class EstacoesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'IP' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'Latin1_General_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'liberaSistema' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        'biometria' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        'liberaAcessoAdministrativo' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => 0, 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['IP'], 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'IP' => '43ed03af-6e22-4fb7-8ec9-295c6d4f3a8b',
                'liberaSistema' => 1,
                'biometria' => 1,
                'liberaAcessoAdministrativo' => 1
            ],
        ];
        parent::init();
    }
}

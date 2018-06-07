<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenuPaiTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenuPaiTable Test Case
 */
class MenuPaiTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MenuPaiTable
     */
    public $MenuPai;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.menu_pai',
        'app.menus',
        'app.grupos',
        'app.controladores',
        'app.controladores_grupos',
        'app.usuarios',
        'app.grupos_usuarios',
        'app.paginas',
        'app.paginas_usuarios',
        'app.tags',
        'app.arquivos',
        'app.categorias',
        'app.arquivos_tags',
        'app.tags_paginas',
        'app.menus_grupos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MenuPai') ? [] : ['className' => MenuPaiTable::class];
        $this->MenuPai = TableRegistry::get('MenuPai', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MenuPai);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

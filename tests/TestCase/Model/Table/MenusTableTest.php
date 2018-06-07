<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenusTable Test Case
 */
class MenusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MenusTable
     */
    public $Menus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.menus',
        'app.superiores',
        'app.grupos',
        'app.controladores',
        'app.controladores_grupos',
        'app.categorias',
        'app.arquivos',
        'app.tags',
        'app.arquivos_tags',
        'app.paginas',
        'app.usuarios',
        'app.grupos_usuarios',
        'app.paginas_usuarios',
        'app.tags_paginas',
        'app.subcategorias',
        'app.grupos_categorias',
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
        $config = TableRegistry::exists('Menus') ? [] : ['className' => MenusTable::class];
        $this->Menus = TableRegistry::get('Menus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Menus);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

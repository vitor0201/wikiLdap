<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenusGruposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenusGruposTable Test Case
 */
class MenusGruposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MenusGruposTable
     */
    public $MenusGrupos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.menus_grupos',
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
        'app.grupos_categorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MenusGrupos') ? [] : ['className' => MenusGruposTable::class];
        $this->MenusGrupos = TableRegistry::get('MenusGrupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MenusGrupos);

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

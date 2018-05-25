<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposCategoriasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposCategoriasTable Test Case
 */
class GruposCategoriasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposCategoriasTable
     */
    public $GruposCategorias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.grupos_categorias',
        'app.categorias',
        'app.arquivos',
        'app.tags',
        'app.arquivos_tags',
        'app.paginas',
        'app.usuarios',
        'app.grupos',
        'app.controladores',
        'app.controladores_grupos',
        'app.grupos_usuarios',
        'app.menus',
        'app.superiores',
        'app.menus_grupos',
        'app.paginas_usuarios',
        'app.tags_paginas',
        'app.subcategorias'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GruposCategorias') ? [] : ['className' => GruposCategoriasTable::class];
        $this->GruposCategorias = TableRegistry::get('GruposCategorias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GruposCategorias);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GruposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GruposTable Test Case
 */
class GruposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GruposTable
     */
    public $Grupos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.menus',
        'app.superiores',
        'app.menus_grupos',
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
        $config = TableRegistry::exists('Grupos') ? [] : ['className' => GruposTable::class];
        $this->Grupos = TableRegistry::get('Grupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Grupos);

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

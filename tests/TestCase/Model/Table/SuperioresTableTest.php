<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SuperioresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SuperioresTable Test Case
 */
class SuperioresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SuperioresTable
     */
    public $Superiores;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.superiores',
        'app.menus',
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
        $config = TableRegistry::exists('Superiores') ? [] : ['className' => SuperioresTable::class];
        $this->Superiores = TableRegistry::get('Superiores', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Superiores);

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

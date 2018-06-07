<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TagsPaginasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TagsPaginasTable Test Case
 */
class TagsPaginasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TagsPaginasTable
     */
    public $TagsPaginas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tags_paginas',
        'app.paginas',
        'app.usuarios',
        'app.paginas_usuarios',
        'app.tags',
        'app.arquivos',
        'app.categorias',
        'app.arquivos_tags',
        'app.paginas_tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TagsPaginas') ? [] : ['className' => TagsPaginasTable::class];
        $this->TagsPaginas = TableRegistry::get('TagsPaginas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TagsPaginas);

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

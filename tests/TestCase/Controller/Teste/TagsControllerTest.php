<?php
namespace App\Test\TestCase\Controller\Teste;

use App\Controller\Teste\TagsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Teste\TagsController Test Case
 */
class TagsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tags',
        'app.arquivos',
        'app.categorias',
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
        'app.tags_paginas'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

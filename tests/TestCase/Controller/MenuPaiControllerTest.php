<?php
namespace App\Test\TestCase\Controller;

use App\Controller\MenuPaiController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\MenuPaiController Test Case
 */
class MenuPaiControllerTest extends IntegrationTestCase
{

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

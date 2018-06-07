<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MenuPaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MenuPaisTable Test Case
 */
class MenuPaisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MenuPaisTable
     */
    public $MenuPais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.menu_pais'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MenuPais') ? [] : ['className' => MenuPaisTable::class];
        $this->MenuPais = TableRegistry::get('MenuPais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MenuPais);

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

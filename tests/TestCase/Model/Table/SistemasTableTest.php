<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SistemasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SistemasTable Test Case
 */
class SistemasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SistemasTable
     */
    public $Sistemas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sistemas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Sistemas') ? [] : ['className' => SistemasTable::class];
        $this->Sistemas = TableRegistry::get('Sistemas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Sistemas);

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

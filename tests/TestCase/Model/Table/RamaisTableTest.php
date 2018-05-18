<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RamaisTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RamaisTable Test Case
 */
class RamaisTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RamaisTable
     */
    public $Ramais;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ramais'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ramais') ? [] : ['className' => RamaisTable::class];
        $this->Ramais = TableRegistry::get('Ramais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ramais);

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

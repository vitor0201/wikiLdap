<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MimesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MimesTable Test Case
 */
class MimesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MimesTable
     */
    public $Mimes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mimes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Mimes') ? [] : ['className' => MimesTable::class];
        $this->Mimes = TableRegistry::get('Mimes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mimes);

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

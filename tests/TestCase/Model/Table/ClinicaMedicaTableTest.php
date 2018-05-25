<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClinicaMedicaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClinicaMedicaTable Test Case
 */
class ClinicaMedicaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClinicaMedicaTable
     */
    public $ClinicaMedica;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.clinica_medica'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClinicaMedica') ? [] : ['className' => ClinicaMedicaTable::class];
        $this->ClinicaMedica = TableRegistry::get('ClinicaMedica', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClinicaMedica);

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

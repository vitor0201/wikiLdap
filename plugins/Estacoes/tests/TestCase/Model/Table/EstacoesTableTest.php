<?php
namespace Estacoes\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use Estacoes\Model\Table\EstacoesTable;

/**
 * Estacoes\Model\Table\EstacoesTable Test Case
 */
class EstacoesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Estacoes\Model\Table\EstacoesTable
     */
    public $Estacoes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.estacoes.estacoes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Estacoes') ? [] : ['className' => EstacoesTable::class];
        $this->Estacoes = TableRegistry::get('Estacoes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Estacoes);

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

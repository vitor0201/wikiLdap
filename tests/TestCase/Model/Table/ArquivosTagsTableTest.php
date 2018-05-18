<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArquivosTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArquivosTagsTable Test Case
 */
class ArquivosTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArquivosTagsTable
     */
    public $ArquivosTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.arquivos_tags',
        'app.arquivos',
        'app.categorias',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ArquivosTags') ? [] : ['className' => ArquivosTagsTable::class];
        $this->ArquivosTags = TableRegistry::get('ArquivosTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArquivosTags);

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

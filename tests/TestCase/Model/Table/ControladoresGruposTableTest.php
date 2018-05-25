<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ControladoresGruposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ControladoresGruposTable Test Case
 */
class ControladoresGruposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ControladoresGruposTable
     */
    public $ControladoresGrupos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.controladores_grupos',
        'app.controladores',
        'app.grupos',
        'app.usuarios',
        'app.grupos_usuarios',
        'app.paginas',
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
        $config = TableRegistry::exists('ControladoresGrupos') ? [] : ['className' => ControladoresGruposTable::class];
        $this->ControladoresGrupos = TableRegistry::get('ControladoresGrupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ControladoresGrupos);

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

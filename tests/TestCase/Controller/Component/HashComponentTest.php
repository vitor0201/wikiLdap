<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\HashComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\HashComponent Test Case
 */
class HashComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\HashComponent
     */
    public $Hash;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Hash = new HashComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hash);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

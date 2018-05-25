<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\LdapComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\LdapComponent Test Case
 */
class LdapComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Controller\Component\LdapComponent
     */
    public $Ldap;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Ldap = new LdapComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ldap);

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

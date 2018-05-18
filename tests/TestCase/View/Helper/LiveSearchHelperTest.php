<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\LiveSearchHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\LiveSearchHelper Test Case
 */
class LiveSearchHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\LiveSearchHelper
     */
    public $LiveSearch;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->LiveSearch = new LiveSearchHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LiveSearch);

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

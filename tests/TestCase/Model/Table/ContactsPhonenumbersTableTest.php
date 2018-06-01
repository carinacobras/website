<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactsPhonenumbersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactsPhonenumbersTable Test Case
 */
class ContactsPhonenumbersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactsPhonenumbersTable
     */
    public $ContactsPhonenumbers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contacts_phonenumbers',
        'app.contacts',
        'app.phone_numbers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContactsPhonenumbers') ? [] : ['className' => ContactsPhonenumbersTable::class];
        $this->ContactsPhonenumbers = TableRegistry::get('ContactsPhonenumbers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactsPhonenumbers);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

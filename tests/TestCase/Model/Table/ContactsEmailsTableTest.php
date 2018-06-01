<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContactsEmailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContactsEmailsTable Test Case
 */
class ContactsEmailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContactsEmailsTable
     */
    public $ContactsEmails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contacts_emails',
        'app.contacts',
        'app.emails'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ContactsEmails') ? [] : ['className' => ContactsEmailsTable::class];
        $this->ContactsEmails = TableRegistry::get('ContactsEmails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContactsEmails);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhonenumbersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhonenumbersTable Test Case
 */
class PhonenumbersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PhonenumbersTable
     */
    public $Phonenumbers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.phone_numbers',
        'app.users',
        'app.coaches',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.Ranks',
        'app.players',
        'app.absences',
        'app.contacts',
        'app.emails',
        'app.relationships',
        'app.managers',
        'app.teams_jerseys',
        'app.roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Phonenumbers') ? [] : ['className' => PhonenumbersTable::class];
        $this->Phonenumbers = TableRegistry::get('Phonenumbers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Phonenumbers);

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

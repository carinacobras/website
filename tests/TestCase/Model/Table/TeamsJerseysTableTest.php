<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamjerseysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamjerseysTable Test Case
 */
class TeamjerseysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamjerseysTable
     */
    public $Teamjerseys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.teams_jerseys',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.Ranks',
        'app.players',
        'app.users',
        'app.coaches',
        'app.emails',
        'app.managers',
        'app.phone_numbers',
        'app.contacts',
        'app.relationships',
        'app.roles',
        'app.absences'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Teamjerseys') ? [] : ['className' => TeamjerseysTable::class];
        $this->Teamjerseys = TableRegistry::get('Teamjerseys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Teamjerseys);

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

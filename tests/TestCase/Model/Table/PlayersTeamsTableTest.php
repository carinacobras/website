<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlayersTeamsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlayersTeamsTable Test Case
 */
class PlayersTeamsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlayersTeamsTable
     */
    public $PlayersTeams;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.players_teams',
        'app.players',
        'app.users',
        'app.coaches',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.ranks',
        'app.training',
        'app.locations',
        'app.games',
        'app.managers',
        'app.teamjerseys',
        'app.emails',
        'app.phonenumbers',
        'app.contacts',
        'app.relationships',
        'app.users_roles',
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
        $config = TableRegistry::exists('PlayersTeams') ? [] : ['className' => PlayersTeamsTable::class];
        $this->PlayersTeams = TableRegistry::get('PlayersTeams', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlayersTeams);

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

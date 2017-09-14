<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlayersFeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlayersFeesTable Test Case
 */
class PlayersFeesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PlayersFeesTable
     */
    public $PlayersFees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.players_fees',
        'app.fees',
        'app.fees_types',
        'app.transactions',
        'app.players',
        'app.users',
        'app.phone_numbers',
        'app.contacts',
        'app.emails',
        'app.relationships',
        'app.coaches',
        'app.teams',
        'app.competitions',
        'app.ladders',
        'app.courts',
        'app.locations',
        'app.training',
        'app.uniforms',
        'app.uniform_colours',
        'app.teams_jerseys',
        'app.teams_coaches',
        'app.managers',
        'app.roles',
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
        $config = TableRegistry::exists('PlayersFees') ? [] : ['className' => PlayersFeesTable::class];
        $this->PlayersFees = TableRegistry::get('PlayersFees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlayersFees);

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

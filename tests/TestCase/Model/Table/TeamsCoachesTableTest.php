<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamsCoachesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamsCoachesTable Test Case
 */
class TeamsCoachesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamsCoachesTable
     */
    public $TeamsCoaches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.teams_coaches',
        'app.teams',
        'app.competitions',
        'app.ladders',
        'app.players',
        'app.users',
        'app.phone_numbers',
        'app.contacts',
        'app.emails',
        'app.relationships',
        'app.coaches',
        'app.managers',
        'app.roles',
        'app.users_roles',
        'app.teams_jerseys',
        'app.absences',
        'app.transactions',
        'app.fees',
        'app.fees_types',
        'app.players_fees',
        'app.courts',
        'app.locations',
        'app.training',
        'app.uniforms',
        'app.uniform_colours'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TeamsCoaches') ? [] : ['className' => TeamsCoachesTable::class];
        $this->TeamsCoaches = TableRegistry::get('TeamsCoaches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamsCoaches);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoachesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoachesTable Test Case
 */
class CoachesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoachesTable
     */
    public $Coaches;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.coaches',
        'app.users',
        'app.phone_numbers',
        'app.contacts',
        'app.emails',
        'app.relationships',
        'app.players',
        'app.absences',
        'app.competitions',
        'app.teams',
        'app.uniforms',
        'app.uniform_colours',
        'app.teams_coaches',
        'app.ladders',
        'app.courts',
        'app.locations',
        'app.training',
        'app.transactions',
        'app.fees',
        'app.fees_types',
        'app.players_fees',
        'app.managers',
        'app.roles',
        'app.users_roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Coaches') ? [] : ['className' => CoachesTable::class];
        $this->Coaches = TableRegistry::get('Coaches', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coaches);

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

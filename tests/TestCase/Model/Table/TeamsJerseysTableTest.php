<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamsJerseysTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamsJerseysTable Test Case
 */
class TeamsJerseysTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamsJerseysTable
     */
    public $TeamsJerseys;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.teams_jerseys',
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
        'app.teams_coaches',
        'app.managers',
        'app.roles',
        'app.users_roles',
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
        $config = TableRegistry::exists('TeamsJerseys') ? [] : ['className' => TeamsJerseysTable::class];
        $this->TeamsJerseys = TableRegistry::get('TeamsJerseys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamsJerseys);

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

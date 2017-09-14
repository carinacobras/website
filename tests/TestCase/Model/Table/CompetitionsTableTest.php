<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompetitionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompetitionsTable Test Case
 */
class CompetitionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CompetitionsTable
     */
    public $Competitions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.competitions',
        'app.teams',
        'app.uniforms',
        'app.uniform_colours',
        'app.coaches',
        'app.users',
        'app.phone_numbers',
        'app.emails',
        'app.managers',
        'app.players',
        'app.ladders',
        'app.fees',
        'app.fees_types',
        'app.players_fees',
        'app.roles',
        'app.users_roles',
        'app.teams_coaches',
        'app.courts',
        'app.locations',
        'app.training'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Competitions') ? [] : ['className' => CompetitionsTable::class];
        $this->Competitions = TableRegistry::get('Competitions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Competitions);

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

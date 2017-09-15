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
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.ladders',
        'app.players',
        'app.absences',
        'app.contacts',
        'app.phone_numbers',
        'app.emails',
        'app.relationships',
        'app.managers',
        'app.teams_jerseys',
        'app.uniforms'
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

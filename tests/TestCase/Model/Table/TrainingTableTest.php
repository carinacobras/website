<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TrainingTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TrainingTable Test Case
 */
class TrainingTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TrainingTable
     */
    public $Training;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.training',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.ladders',
        'app.players',
        'app.users',
        'app.coaches',
        'app.teams',
        'app.managers',
        'app.teams_jerseys',
        'app.emails',
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
        $config = TableRegistry::exists('Training') ? [] : ['className' => TrainingTable::class];
        $this->Training = TableRegistry::get('Training', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Training);

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

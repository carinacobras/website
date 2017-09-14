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
        'app.teams',
        'app.coaches',
        'app.users',
        'app.emails',
        'app.managers',
        'app.phone_numbers',
        'app.contacts',
        'app.relationships',
        'app.players',
        'app.absences',
        'app.ladders',
        'app.transactions',
        'app.fees',
        'app.roles',
        'app.teams_jerseys',
        'app.uniforms',
        'app.uniform_colours',
        'app.courts',
        'app.locations'
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
}

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
        'app.courts',
        'app.locations',
        'app.training',
        'app.ladders',
        'app.players',
        'app.users',
        'app.absences',
        'app.contacts',
        'app.phone_numbers',
        'app.emails',
        'app.relationships',
        'app.coaches',
        'app.managers',
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

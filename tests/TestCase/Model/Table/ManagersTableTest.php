<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ManagersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ManagersTable Test Case
 */
class ManagersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ManagersTable
     */
    public $Managers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.managers',
        'app.users',
        'app.coaches',
        'app.teams',
        'app.competitions',
        'app.ladders',
        'app.players',
        'app.absences',
        'app.transactions',
        'app.fees',
        'app.courts',
        'app.locations',
        'app.training',
        'app.teams_jerseys',
        'app.uniforms',
        'app.uniform_colours',
        'app.emails',
        'app.phone_numbers',
        'app.contacts',
        'app.relationships',
        'app.roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Managers') ? [] : ['className' => ManagersTable::class];
        $this->Managers = TableRegistry::get('Managers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Managers);

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

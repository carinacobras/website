<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LaddersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LaddersTable Test Case
 */
class LaddersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LaddersTable
     */
    public $Ladders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ladders',
        'app.competitions',
        'app.players',
        'app.users',
        'app.coaches',
        'app.teams',
        'app.managers',
        'app.teams_jerseys',
        'app.uniforms',
        'app.uniform_colours',
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
        $config = TableRegistry::exists('Ladders') ? [] : ['className' => LaddersTable::class];
        $this->Ladders = TableRegistry::get('Ladders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ladders);

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

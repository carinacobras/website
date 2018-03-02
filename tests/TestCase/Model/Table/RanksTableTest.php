<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RanksTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RanksTable Test Case
 */
class RanksTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RanksTable
     */
    public $Ranks;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ranks',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.ladders',
        'app.teams',
        'app.coaches',
        'app.users',
        'app.emails',
        'app.managers',
        'app.phone_numbers',
        'app.contacts',
        'app.players',
        'app.absences',
        'app.relationships',
        'app.users_roles',
        'app.teams_jerseys'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Ranks') ? [] : ['className' => RanksTable::class];
        $this->Ranks = TableRegistry::get('Ranks', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ranks);

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

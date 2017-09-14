<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CourtsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CourtsTable Test Case
 */
class CourtsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CourtsTable
     */
    public $Courts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.courts',
        'app.locations',
        'app.training',
        'app.competitions',
        'app.teams',
        'app.uniforms',
        'app.uniform_colours',
        'app.coaches',
        'app.users',
        'app.contacts',
        'app.phone_numbers',
        'app.emails',
        'app.relationships',
        'app.players',
        'app.ladders',
        'app.fees',
        'app.fees_types',
        'app.players_fees',
        'app.managers',
        'app.roles',
        'app.users_roles',
        'app.teams_coaches'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Courts') ? [] : ['className' => CourtsTable::class];
        $this->Courts = TableRegistry::get('Courts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Courts);

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

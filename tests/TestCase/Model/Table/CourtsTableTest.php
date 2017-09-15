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
        'app.competitions',
        'app.ladders',
        'app.players',
        'app.users',
        'app.teams',
        'app.coaches',
        'app.managers',
        'app.teams_jerseys',
        'app.uniforms',
        'app.absences',
        'app.contacts',
        'app.phone_numbers',
        'app.emails',
        'app.relationships',
        'app.training',
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

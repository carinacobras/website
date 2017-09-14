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
}

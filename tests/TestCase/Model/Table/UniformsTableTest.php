<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UniformsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UniformsTable Test Case
 */
class UniformsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UniformsTable
     */
    public $Uniforms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.uniforms',
        'app.uniform_colours',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.Ranks',
        'app.players',
        'app.users',
        'app.absences',
        'app.contacts',
        'app.phone_numbers',
        'app.emails',
        'app.relationships',
        'app.coaches',
        'app.managers',
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
        $config = TableRegistry::exists('Uniforms') ? [] : ['className' => UniformsTable::class];
        $this->Uniforms = TableRegistry::get('Uniforms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Uniforms);

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

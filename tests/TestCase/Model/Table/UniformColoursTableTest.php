<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UniformColoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UniformColoursTable Test Case
 */
class UniformColoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UniformColoursTable
     */
    public $UniformColours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.uniform_colours',
        'app.uniforms',
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
        'app.competitions',
        'app.ladders',
        'app.roles',
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
        $config = TableRegistry::exists('UniformColours') ? [] : ['className' => UniformColoursTable::class];
        $this->UniformColours = TableRegistry::get('UniformColours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UniformColours);

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

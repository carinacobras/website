<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersRolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersRolesTable Test Case
 */
class UsersRolesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersRolesTable
     */
    public $UsersRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users_roles',
        'app.roles',
        'app.users',
        'app.phone_numbers',
        'app.contacts',
        'app.emails',
        'app.relationships',
        'app.players',
        'app.teams',
        'app.competitions',
        'app.Ranks',
        'app.courts',
        'app.locations',
        'app.training',
        'app.uniforms',
        'app.uniform_colours',
        'app.teams_jerseys',
        'app.coaches',
        'app.teams_coaches',
        'app.absences',
        'app.transactions',
        'app.fees',
        'app.fees_types',
        'app.players_fees',
        'app.managers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UsersRoles') ? [] : ['className' => UsersRolesTable::class];
        $this->UsersRoles = TableRegistry::get('UsersRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersRoles);

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

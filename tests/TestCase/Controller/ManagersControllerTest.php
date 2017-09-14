<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ManagersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ManagersController Test Case
 */
class ManagersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.managers',
        'app.users',
        'app.phone_numbers',
        'app.emails',
        'app.coaches',
        'app.teams',
        'app.competitions',
        'app.ladders',
        'app.players',
        'app.fees',
        'app.fees_types',
        'app.transactions',
        'app.players_fees',
        'app.courts',
        'app.locations',
        'app.training',
        'app.uniforms',
        'app.uniform_colours',
        'app.teams_coaches',
        'app.roles',
        'app.users_roles'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

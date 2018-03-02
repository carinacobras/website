<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TeamsCoachesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TeamsCoachesController Test Case
 */
class TeamsCoachesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.teams_coaches',
        'app.teams',
        'app.competitions',
        'app.Ranks',
        'app.players',
        'app.users',
        'app.phone_numbers',
        'app.contacts',
        'app.emails',
        'app.relationships',
        'app.coaches',
        'app.managers',
        'app.roles',
        'app.users_roles',
        'app.teams_jerseys',
        'app.absences',
        'app.transactions',
        'app.fees',
        'app.fees_types',
        'app.players_fees',
        'app.courts',
        'app.locations',
        'app.training',
        'app.uniforms',
        'app.uniform_colours'
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

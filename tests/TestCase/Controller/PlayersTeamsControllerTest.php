<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PlayersTeamsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PlayersTeamsController Test Case
 */
class PlayersTeamsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.players_teams',
        'app.players',
        'app.users',
        'app.coaches',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.ranks',
        'app.training',
        'app.locations',
        'app.games',
        'app.managers',
        'app.teamjerseys',
        'app.emails',
        'app.phonenumbers',
        'app.contacts',
        'app.relationships',
        'app.users_roles',
        'app.absences'
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

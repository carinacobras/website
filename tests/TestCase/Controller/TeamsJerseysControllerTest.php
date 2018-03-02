<?php
namespace App\Test\TestCase\Controller;

use App\Controller\TeamsJerseysController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\TeamsJerseysController Test Case
 */
class TeamsJerseysControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.teams_jerseys',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.Ranks',
        'app.players',
        'app.users',
        'app.coaches',
        'app.emails',
        'app.managers',
        'app.phone_numbers',
        'app.contacts',
        'app.relationships',
        'app.roles',
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

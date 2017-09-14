<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CoachesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CoachesController Test Case
 */
class CoachesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.coaches',
        'app.users',
        'app.emails',
        'app.managers',
        'app.teams',
        'app.competitions',
        'app.players',
        'app.contacts',
        'app.phone_numbers',
        'app.relationships',
        'app.absences',
        'app.ladders',
        'app.teams_jerseys',
        'app.uniforms',
        'app.uniform_colours',
        'app.roles'
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

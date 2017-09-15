<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CourtsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CourtsController Test Case
 */
class CourtsControllerTest extends IntegrationTestCase
{

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

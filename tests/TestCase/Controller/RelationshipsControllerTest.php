<?php
namespace App\Test\TestCase\Controller;

use App\Controller\RelationshipsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\RelationshipsController Test Case
 */
class RelationshipsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.relationships',
        'app.contacts',
        'app.players',
        'app.users',
        'app.coaches',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.ladders',
        'app.managers',
        'app.teams_jerseys',
        'app.uniforms',
        'app.uniform_colours',
        'app.emails',
        'app.phone_numbers',
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

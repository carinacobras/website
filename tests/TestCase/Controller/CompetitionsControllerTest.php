<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CompetitionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CompetitionsController Test Case
 */
class CompetitionsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.competitions',
        'app.teams',
        'app.uniforms',
        'app.uniform_colours',
        'app.coaches',
        'app.users',
        'app.contacts',
        'app.phone_numbers',
        'app.emails',
        'app.relationships',
        'app.players',
        'app.ladders',
        'app.fees',
        'app.fees_types',
        'app.players_fees',
        'app.managers',
        'app.roles',
        'app.users_roles',
        'app.teams_coaches',
        'app.courts',
        'app.locations',
        'app.training'
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

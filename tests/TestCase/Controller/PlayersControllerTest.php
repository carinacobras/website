<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PlayersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PlayersController Test Case
 */
class PlayersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.players',
        'app.users',
        'app.ladders',
        'app.competitions',
        'app.teams',
        'app.courts',
        'app.locations',
        'app.training',
        'app.fees',
        'app.fees_types',
        'app.players_fees'
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

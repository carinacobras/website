<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OrderItemsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\OrderItemsController Test Case
 */
class OrderItemsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.order_items',
        'app.order_lines',
        'app.orders',
        'app.players',
        'app.users',
        'app.coaches',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.Ranks',
        'app.managers',
        'app.teams_jerseys',
        'app.emails',
        'app.phone_numbers',
        'app.contacts',
        'app.relationships',
        'app.roles',
        'app.absences',
        'app.invoices',
        'app.payments'
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

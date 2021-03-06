<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderlinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderlinesTable Test Case
 */
class OrderlinesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderlinesTable
     */
    public $orderlines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        'app.payments',
        'app.order_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('orderlines') ? [] : ['className' => OrderlinesTable::class];
        $this->orderlines = TableRegistry::get('orderlines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->orderlines);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

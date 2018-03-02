<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChargesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChargesTable Test Case
 */
class ChargesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChargesTable
     */
    public $Charges;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.charges',
        'app.charge_types',
        'app.invoice_items',
        'app.invoices',
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
        'app.invoices_item',
        'app.payments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Charges') ? [] : ['className' => ChargesTable::class];
        $this->Charges = TableRegistry::get('Charges', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Charges);

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

<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChargeTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChargeTypesTable Test Case
 */
class ChargeTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ChargeTypesTable
     */
    public $ChargeTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.charge_types',
        'app.charges'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ChargeTypes') ? [] : ['className' => ChargeTypesTable::class];
        $this->ChargeTypes = TableRegistry::get('ChargeTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ChargeTypes);

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
}

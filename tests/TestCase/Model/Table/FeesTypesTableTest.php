<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeesTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeesTypesTable Test Case
 */
class FeesTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeesTypesTable
     */
    public $FeesTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.fees_types',
        'app.fees',
        'app.transactions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FeesTypes') ? [] : ['className' => FeesTypesTable::class];
        $this->FeesTypes = TableRegistry::get('FeesTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FeesTypes);

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

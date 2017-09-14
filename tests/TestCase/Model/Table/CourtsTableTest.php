<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CourtsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CourtsTable Test Case
 */
class CourtsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CourtsTable
     */
    public $Courts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.courts',
        'app.competitions',
        'app.teams',
        'app.ladders',
        'app.training',
        'app.locations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Courts') ? [] : ['className' => CourtsTable::class];
        $this->Courts = TableRegistry::get('Courts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Courts);

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

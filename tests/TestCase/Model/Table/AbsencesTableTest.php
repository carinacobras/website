<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AbsencesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AbsencesTable Test Case
 */
class AbsencesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AbsencesTable
     */
    public $Absences;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.absences',
        'app.players',
        'app.competitions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Absences') ? [] : ['className' => AbsencesTable::class];
        $this->Absences = TableRegistry::get('Absences', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Absences);

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

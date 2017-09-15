<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PhoneNumbersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PhoneNumbersTable Test Case
 */
class PhoneNumbersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PhoneNumbersTable
     */
    public $PhoneNumbers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.phone_numbers',
        'app.users',
        'app.contacts',
        'app.players',
        'app.teams',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.ladders',
        'app.coaches',
        'app.managers',
        'app.teams_jerseys',
        'app.uniforms',
        'app.absences',
        'app.emails',
        'app.relationships'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PhoneNumbers') ? [] : ['className' => PhoneNumbersTable::class];
        $this->PhoneNumbers = TableRegistry::get('PhoneNumbers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PhoneNumbers);

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

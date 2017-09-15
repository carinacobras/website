<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RelationshipsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RelationshipsTable Test Case
 */
class RelationshipsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RelationshipsTable
     */
    public $Relationships;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.relationships',
        'app.contacts',
        'app.players',
        'app.users',
        'app.teams',
        'app.absences',
        'app.ladders',
        'app.competitions',
        'app.courts',
        'app.locations',
        'app.training',
        'app.phone_numbers',
        'app.emails'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Relationships') ? [] : ['className' => RelationshipsTable::class];
        $this->Relationships = TableRegistry::get('Relationships', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Relationships);

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

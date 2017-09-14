<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContactsFixture
 *
 */
class ContactsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'phone_numbers_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emails_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'first_name' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'last_name' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'relationships_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'players_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_contacts_phone_numbers1_idx' => ['type' => 'index', 'columns' => ['phone_numbers_id'], 'length' => []],
            'fk_contacts_emails1_idx' => ['type' => 'index', 'columns' => ['emails_id'], 'length' => []],
            'fk_contacts_relationships1_idx' => ['type' => 'index', 'columns' => ['relationships_id'], 'length' => []],
            'fk_contacts_players1' => ['type' => 'index', 'columns' => ['players_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_contacts_emails1' => ['type' => 'foreign', 'columns' => ['emails_id'], 'references' => ['emails', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contacts_phone_numbers1' => ['type' => 'foreign', 'columns' => ['phone_numbers_id'], 'references' => ['phone_numbers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_contacts_players1' => ['type' => 'foreign', 'columns' => ['players_id'], 'references' => ['players', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_contacts_relationships1' => ['type' => 'foreign', 'columns' => ['relationships_id'], 'references' => ['relationships', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'phone_numbers_id' => 1,
            'emails_id' => 1,
            'first_name' => 'Lorem ipsum dolor sit amet',
            'last_name' => 'Lorem ipsum dolor sit amet',
            'relationships_id' => 1,
            'players_id' => 1
        ],
    ];
}

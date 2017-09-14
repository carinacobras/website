<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PlayersFeesFixture
 *
 */
class PlayersFeesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'fees_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'players_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_players_has_fees_fees1_idx' => ['type' => 'index', 'columns' => ['fees_id'], 'length' => []],
            'fk_players_has_fees_players1_idx' => ['type' => 'index', 'columns' => ['players_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_players_has_fees_fees1' => ['type' => 'foreign', 'columns' => ['fees_id'], 'references' => ['fees', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_players_has_fees_players1' => ['type' => 'foreign', 'columns' => ['players_id'], 'references' => ['players', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'fees_id' => 1,
            'players_id' => 1,
            'status' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}

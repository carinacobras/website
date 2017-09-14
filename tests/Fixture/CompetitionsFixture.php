<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CompetitionsFixture
 *
 */
class CompetitionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'year' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'time' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'comments' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'team_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ladder_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'courts_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'training_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_team_has_player_team1_idx' => ['type' => 'index', 'columns' => ['team_id'], 'length' => []],
            'fk_competition_ladder1_idx' => ['type' => 'index', 'columns' => ['ladder_id'], 'length' => []],
            'fk_competitions_courts1_idx' => ['type' => 'index', 'columns' => ['courts_id'], 'length' => []],
            'fk_competitions_training1_idx' => ['type' => 'index', 'columns' => ['training_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'name', 'year'], 'length' => []],
            'name_UNIQUE' => ['type' => 'unique', 'columns' => ['name'], 'length' => []],
            'year_UNIQUE' => ['type' => 'unique', 'columns' => ['year'], 'length' => []],
            'fk_competition_ladder1' => ['type' => 'foreign', 'columns' => ['ladder_id'], 'references' => ['ladders', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_competitions_courts1' => ['type' => 'foreign', 'columns' => ['courts_id'], 'references' => ['courts', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_competitions_training1' => ['type' => 'foreign', 'columns' => ['training_id'], 'references' => ['training', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_team_has_player_team1' => ['type' => 'foreign', 'columns' => ['team_id'], 'references' => ['teams', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'name' => 'ed19bd70-b3a0-482c-be4e-f18a8ec9edce',
            'year' => '2017-09-14 09:57:01',
            'time' => '2017-09-14 09:57:01',
            'comments' => 'Lorem ipsum dolor sit amet',
            'team_id' => 1,
            'ladder_id' => 1,
            'courts_id' => 1,
            'training_id' => 1
        ],
    ];
}

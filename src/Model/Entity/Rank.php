<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rank Entity
 *
 * @property int $id
 * @property int $competition_id
 * @property int $player_id
 * @property int $team_id
 * @property int $rank
 *
 * @property \App\Model\Entity\Competition $competition
 * @property \App\Model\Entity\Player $player
 * @property \App\Model\Entity\Team $team
 */
class Rank extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'competition_id' => true,
        'player_id' => true,
        'team_id' => true,
        'rank' => true,
        'competition' => true,
        'player' => true,
        'team' => true
    ];
}

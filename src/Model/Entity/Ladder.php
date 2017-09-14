<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ladder Entity
 *
 * @property int $id
 * @property int $rank
 * @property int $player_id
 *
 * @property \App\Model\Entity\Player $player
 * @property \App\Model\Entity\Competition[] $competitions
 */
class Ladder extends Entity
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
        '*' => true,
        'id' => false
    ];
}

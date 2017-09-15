<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity
 *
 * @property int $id
 * @property string $name
 * @property int $competition_id
 *
 * @property \App\Model\Entity\Coach[] $coaches
 * @property \App\Model\Entity\Manager[] $managers
 * @property \App\Model\Entity\Player[] $players
 * @property \App\Model\Entity\TeamsJersey[] $teams_jerseys
 * @property \App\Model\Entity\Uniform[] $uniforms
 */
class Team extends Entity
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

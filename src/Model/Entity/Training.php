<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Training Entity
 *
 * @property int $id
 * @property string $time
 * @property int $competition_id
 * @property int $location_id
 * @property int $team_id 
 *
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\Competition $competition
 * @property \App\Model\Entity\Location $location
 */
class Training extends Entity
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
        'time' => true,
        'team_id' => true,
        'competition_id' => true,
        'location_id' => true,
        'competition' => true,
        'location' => true
    ];
}

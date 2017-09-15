<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Player Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $team_id
 * @property int $contact_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\Contact $contact
 * @property \App\Model\Entity\Absence[] $absences
 * @property \App\Model\Entity\Ladder[] $ladders
 */
class Player extends Entity
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

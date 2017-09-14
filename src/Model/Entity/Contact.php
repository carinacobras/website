<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contact Entity
 *
 * @property int $id
 * @property int $phone_numbers_id
 * @property int $emails_id
 * @property string $first_name
 * @property string $last_name
 * @property int $relationships_id
 * @property int $players_id
 *
 * @property \App\Model\Entity\PhoneNumber $phone_number
 * @property \App\Model\Entity\Email $email
 * @property \App\Model\Entity\Relationship $relationship
 * @property \App\Model\Entity\Player $player
 */
class Contact extends Entity
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

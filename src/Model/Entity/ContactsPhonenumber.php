<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContactsPhonenumber Entity
 *
 * @property int $id
 * @property int $contact_id
 * @property int $phonenumber_id
 *
 * @property \App\Model\Entity\Contact $contact
 * @property \App\Model\Entity\Phonenumber $phone_number
 */
class ContactsPhonenumber extends Entity
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
        'contact_id' => true,
        'phonenumber_id' => true,
        'contact' => true,
        'phone_number' => true
    ];
}

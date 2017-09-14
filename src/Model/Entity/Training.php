<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Training Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $time
 * @property int $competition_id
 *
 * @property \App\Model\Entity\Competition[] $competitions
 * @property \App\Model\Entity\Location[] $locations
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
        '*' => true,
        'id' => false
    ];
}

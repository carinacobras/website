<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Competition Entity
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\FrozenTime $year
 * @property \Cake\I18n\FrozenTime $time
 * @property string $comments
 * @property int $team_id
 * @property int $ladder_id
 * @property int $court_id
 * @property int $training_id
 *
 * @property \App\Model\Entity\Team $team
 * @property \App\Model\Entity\Ladder $ladder
 * @property \App\Model\Entity\Court $court
 * @property \App\Model\Entity\Training $training
 */
class Competition extends Entity
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
        'id' => false,
        'name' => false,
        'year' => false
    ];
}

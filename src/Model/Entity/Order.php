<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $order_date
 * @property int $player_id
 *
 * @property \App\Model\Entity\Player $player
 * @property \App\Model\Entity\Invoice[] $invoices
 * @property \App\Model\Entity\OrderLine[] $order_lines
 */
class Order extends Entity
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
        'order_date' => true,
        'player_id' => true,
        'player' => true,
        'invoices' => true,
        'order_lines' => true
    ];
}

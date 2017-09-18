<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $payment_date
 * @property int $amount
 * @property int $player_id
 * @property int $invoice_id
 *
 * @property \App\Model\Entity\Player $player
 * @property \App\Model\Entity\Invoice $invoice
 */
class Payment extends Entity
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
        'payment_date' => true,
        'amount' => true,
        'player_id' => true,
        'invoice_id' => true,
        'player' => true,
        'invoice' => true
    ];
}

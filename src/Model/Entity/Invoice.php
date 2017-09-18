<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property string $invoice_number
 * @property \Cake\I18n\FrozenDate $invoice_date
 * @property int $charges_id
 * @property int $amount
 * @property \Cake\I18n\FrozenDate $due_date
 * @property int $player_id
 *
 * @property \App\Model\Entity\Charge[] $charges
 * @property \App\Model\Entity\Player $player
 * @property \App\Model\Entity\Payment[] $payments
 */
class Invoice extends Entity
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
        'invoice_number' => true,
        'invoice_date' => true,
        'charges_id' => true,
        'amount' => true,
        'due_date' => true,
        'player_id' => true,
        'charges' => true,
        'player' => true,
        'payments' => true
    ];
}

<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property int $order_id
 * @property \Cake\I18n\FrozenTime $invoice_date
 *
 * @property \App\Model\Entity\Order $order
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
        'order_id' => true,
        'invoice_date' => true,
        'order' => true,
        'payments' => true
    ];
}

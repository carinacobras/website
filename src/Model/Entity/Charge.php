<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Charge Entity
 *
 * @property int $id
 * @property int $charge_type_id
 *
 * @property \App\Model\Entity\ChargeType $charge_type
 * @property \App\Model\Entity\InvoiceItem[] $invoice_items
 */
class Charge extends Entity
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
        'charge_type_id' => true,
        'charge_type' => true,
        'invoice_items' => true
    ];
}

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InvoiceItem $invoiceItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice Item'), ['action' => 'edit', $invoiceItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice Item'), ['action' => 'delete', $invoiceItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoiceItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoice Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoiceItems view large-9 medium-8 columns content">
    <h3><?= h($invoiceItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= $invoiceItem->has('invoice') ? $this->Html->link($invoiceItem->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $invoiceItem->invoice->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Charge') ?></th>
            <td><?= $invoiceItem->has('charge') ? $this->Html->link($invoiceItem->charge->id, ['controller' => 'Charges', 'action' => 'view', $invoiceItem->charge->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoiceItem->id) ?></td>
        </tr>
    </table>
</div>

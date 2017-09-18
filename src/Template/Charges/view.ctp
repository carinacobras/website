<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Charge $charge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Charge'), ['action' => 'edit', $charge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Charge'), ['action' => 'delete', $charge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $charge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Charges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charge Types'), ['controller' => 'ChargeTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge Type'), ['controller' => 'ChargeTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="charges view large-9 medium-8 columns content">
    <h3><?= h($charge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= $charge->has('invoice') ? $this->Html->link($charge->invoice->id, ['controller' => 'Invoices', 'action' => 'view', $charge->invoice->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Charge Type') ?></th>
            <td><?= $charge->has('charge_type') ? $this->Html->link($charge->charge_type->name, ['controller' => 'ChargeTypes', 'action' => 'view', $charge->charge_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($charge->id) ?></td>
        </tr>
    </table>
</div>

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
        <li><?= $this->Html->link(__('List Charge Types'), ['controller' => 'ChargeTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge Type'), ['controller' => 'ChargeTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices Item'), ['controller' => 'InvoicesItem', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoices Item'), ['controller' => 'InvoicesItem', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="charges view large-9 medium-8 columns content">
    <h3><?= h($charge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Charge Type') ?></th>
            <td><?= $charge->has('charge_type') ? $this->Html->link($charge->charge_type->name, ['controller' => 'ChargeTypes', 'action' => 'view', $charge->charge_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($charge->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Id') ?></th>
            <td><?= $this->Number->format($charge->order_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Invoices Item') ?></h4>
        <?php if (!empty($charge->invoices_item)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Charge Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($charge->invoices_item as $invoicesItem): ?>
            <tr>
                <td><?= h($invoicesItem->id) ?></td>
                <td><?= h($invoicesItem->invoice_id) ?></td>
                <td><?= h($invoicesItem->charge_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InvoicesItem', 'action' => 'view', $invoicesItem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InvoicesItem', 'action' => 'edit', $invoicesItem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InvoicesItem', 'action' => 'delete', $invoicesItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoicesItem->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

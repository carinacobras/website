<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Charge[]|\Cake\Collection\CollectionInterface $charges
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charge Types'), ['controller' => 'ChargeTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge Type'), ['controller' => 'ChargeTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoice Items'), ['controller' => 'InvoiceItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice Item'), ['controller' => 'InvoiceItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="charges index large-9 medium-8 columns content">
    <h3><?= __('Charges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('charge_type_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($charges as $charge): ?>
            <tr>
                <td><?= $this->Number->format($charge->id) ?></td>
                <td><?= $charge->has('charge_type') ? $this->Html->link($charge->charge_type->name, ['controller' => 'ChargeTypes', 'action' => 'view', $charge->charge_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $charge->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $charge->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $charge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $charge->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChargeType[]|\Cake\Collection\CollectionInterface $chargeTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Charge Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chargeTypes index large-9 medium-8 columns content">
    <h3><?= __('Charge Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chargeTypes as $chargeType): ?>
            <tr>
                <td><?= $this->Number->format($chargeType->id) ?></td>
                <td><?= h($chargeType->name) ?></td>
                <td><?= h($chargeType->year) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chargeType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chargeType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chargeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chargeType->id)]) ?>
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

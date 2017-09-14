<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Fee[]|\Cake\Collection\CollectionInterface $fees
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fees Types'), ['controller' => 'FeesTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fees Type'), ['controller' => 'FeesTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fees index large-9 medium-8 columns content">
    <h3><?= __('Fees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fees_types_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fees as $fee): ?>
            <tr>
                <td><?= $this->Number->format($fee->id) ?></td>
                <td><?= $fee->has('fees_type') ? $this->Html->link($fee->fees_type->name, ['controller' => 'FeesTypes', 'action' => 'view', $fee->fees_type->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fee->id)]) ?>
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

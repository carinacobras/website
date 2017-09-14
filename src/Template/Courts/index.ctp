<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Court[]|\Cake\Collection\CollectionInterface $courts
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Court'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="courts index large-9 medium-8 columns content">
    <h3><?= __('Courts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locations_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courts as $court): ?>
            <tr>
                <td><?= $this->Number->format($court->id) ?></td>
                <td><?= $this->Number->format($court->number) ?></td>
                <td><?= $court->has('location') ? $this->Html->link($court->location->id, ['controller' => 'Locations', 'action' => 'view', $court->location->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $court->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $court->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $court->id], ['confirm' => __('Are you sure you want to delete # {0}?', $court->id)]) ?>
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

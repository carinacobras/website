<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Competition[]|\Cake\Collection\CollectionInterface $competitions
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ladders'), ['controller' => 'Ladders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ladder'), ['controller' => 'Ladders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courts'), ['controller' => 'Courts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Court'), ['controller' => 'Courts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Training'), ['controller' => 'Training', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Training', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competitions index large-9 medium-8 columns content">
    <h3><?= __('Competitions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comments') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ladder_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('court_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('training_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($competitions as $competition): ?>
            <tr>
                <td><?= $this->Number->format($competition->id) ?></td>
                <td><?= h($competition->name) ?></td>
                <td><?= h($competition->year) ?></td>
                <td><?= h($competition->time) ?></td>
                <td><?= h($competition->comments) ?></td>
                <td><?= $competition->has('team') ? $this->Html->link($competition->team->id, ['controller' => 'Teams', 'action' => 'view', $competition->team->id]) : '' ?></td>
                <td><?= $competition->has('ladder') ? $this->Html->link($competition->ladder->id, ['controller' => 'Ladders', 'action' => 'view', $competition->ladder->id]) : '' ?></td>
                <td><?= $this->Number->format($competition->court_id) ?></td>
                <td><?= $competition->has('training') ? $this->Html->link($competition->training->id, ['controller' => 'Training', 'action' => 'view', $competition->training->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $competition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $competition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?>
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

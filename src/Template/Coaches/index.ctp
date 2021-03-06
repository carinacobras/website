<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Coach[]|\Cake\Collection\CollectionInterface $coaches
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coach'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coaches index col-sm-12">
    <h3><?= __('Coaches') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coaches as $coach): ?>
            <tr>
                <td><?= $this->Number->format($coach->id) ?></td>
                <td><?= $coach->has('user') ? $this->Html->link($coach->user->id, ['controller' => 'Users', 'action' => 'view', $coach->user->id]) : '' ?></td>
                <td><?= $coach->has('team') ? $this->Html->link($coach->team->name, ['controller' => 'Teams', 'action' => 'view', $coach->team->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coach->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coach->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coach->id)]) ?>
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

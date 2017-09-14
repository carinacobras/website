<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TeamsCoach[]|\Cake\Collection\CollectionInterface $teamsCoaches
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Teams Coach'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamsCoaches index large-9 medium-8 columns content">
    <h3><?= __('Teams Coaches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teamsCoaches as $teamsCoach): ?>
            <tr>
                <td><?= $this->Number->format($teamsCoach->id) ?></td>
                <td><?= $teamsCoach->has('team') ? $this->Html->link($teamsCoach->team->id, ['controller' => 'Teams', 'action' => 'view', $teamsCoach->team->id]) : '' ?></td>
                <td><?= $teamsCoach->has('coach') ? $this->Html->link($teamsCoach->coach->id, ['controller' => 'Coaches', 'action' => 'view', $teamsCoach->coach->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teamsCoach->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamsCoach->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamsCoach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamsCoach->id)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rank[]|\Cake\Collection\CollectionInterface $ranks
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rank'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ranks index large-9 medium-8 columns content">
    <h3><?= __('Ranks') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rank') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ranks as $rank): ?>
            <tr>
                <td><?= $this->Number->format($rank->id) ?></td>
                <td><?= $rank->has('competition') ? $this->Html->link($rank->competition->name, ['controller' => 'Competitions', 'action' => 'view', $rank->competition->id]) : '' ?></td>
                <td><?= $rank->has('player') ? $this->Html->link($rank->player->id, ['controller' => 'Players', 'action' => 'view', $rank->player->id]) : '' ?></td>
                <td><?= $rank->has('team') ? $this->Html->link($rank->team->name, ['controller' => 'Teams', 'action' => 'view', $rank->team->id]) : '' ?></td>
                <td><?= $this->Number->format($rank->rank) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rank->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rank->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rank->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rank->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

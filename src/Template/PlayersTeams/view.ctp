<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlayersTeam $playersTeam
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Players Team'), ['action' => 'edit', $playersTeam->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Players Team'), ['action' => 'delete', $playersTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playersTeam->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Players Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="playersTeams view large-9 medium-8 columns content">
    <h3><?= h($playersTeam->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $playersTeam->has('player') ? $this->Html->link($playersTeam->player->full_name, ['controller' => 'Players', 'action' => 'view', $playersTeam->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $playersTeam->has('team') ? $this->Html->link($playersTeam->team->full_title, ['controller' => 'Teams', 'action' => 'view', $playersTeam->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($playersTeam->id) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Competition $competition
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competition'), ['action' => 'edit', $competition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competition'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ladders'), ['controller' => 'Ladders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ladder'), ['controller' => 'Ladders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courts'), ['controller' => 'Courts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Court'), ['controller' => 'Courts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Training'), ['controller' => 'Training', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Training', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competitions view large-9 medium-8 columns content">
    <h3><?= h($competition->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($competition->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($competition->comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $competition->has('team') ? $this->Html->link($competition->team->id, ['controller' => 'Teams', 'action' => 'view', $competition->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ladder') ?></th>
            <td><?= $competition->has('ladder') ? $this->Html->link($competition->ladder->id, ['controller' => 'Ladders', 'action' => 'view', $competition->ladder->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Court') ?></th>
            <td><?= $competition->has('court') ? $this->Html->link($competition->court->id, ['controller' => 'Courts', 'action' => 'view', $competition->court->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Training') ?></th>
            <td><?= $competition->has('training') ? $this->Html->link($competition->training->id, ['controller' => 'Training', 'action' => 'view', $competition->training->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($competition->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($competition->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($competition->time) ?></td>
        </tr>
    </table>
</div>

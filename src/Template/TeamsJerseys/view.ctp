<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TeamsJersey $teamsJersey
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Teams Jersey'), ['action' => 'edit', $teamsJersey->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Teams Jersey'), ['action' => 'delete', $teamsJersey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamsJersey->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams Jerseys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teams Jersey'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teamsJerseys view large-9 medium-8 columns content">
    <h3><?= h($teamsJersey->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $teamsJersey->has('team') ? $this->Html->link($teamsJersey->team->name, ['controller' => 'Teams', 'action' => 'view', $teamsJersey->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colour') ?></th>
            <td><?= h($teamsJersey->colour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($teamsJersey->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($teamsJersey->number) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TeamsCoach $teamsCoach
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Teams Coach'), ['action' => 'edit', $teamsCoach->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Teams Coach'), ['action' => 'delete', $teamsCoach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamsCoach->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams Coaches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teams Coach'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teamsCoaches view large-9 medium-8 columns content">
    <h3><?= h($teamsCoach->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $teamsCoach->has('team') ? $this->Html->link($teamsCoach->team->id, ['controller' => 'Teams', 'action' => 'view', $teamsCoach->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coach') ?></th>
            <td><?= $teamsCoach->has('coach') ? $this->Html->link($teamsCoach->coach->id, ['controller' => 'Coaches', 'action' => 'view', $teamsCoach->coach->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($teamsCoach->id) ?></td>
        </tr>
    </table>
</div>

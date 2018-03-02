<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Coach $coach
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coach'), ['action' => 'edit', $coach->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coach'), ['action' => 'delete', $coach->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coach->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coaches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coaches view col-sm-12">
    <h3><?= h($coach->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $coach->has('user') ? $this->Html->link($coach->user->id, ['controller' => 'Users', 'action' => 'view', $coach->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $coach->has('team') ? $this->Html->link($coach->team->name, ['controller' => 'Teams', 'action' => 'view', $coach->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coach->id) ?></td>
        </tr>
    </table>
</div>

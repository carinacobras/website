<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Manager $manager
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Manager'), ['action' => 'edit', $manager->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Manager'), ['action' => 'delete', $manager->id], ['confirm' => __('Are you sure you want to delete # {0}?', $manager->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="managers view col-sm-12">
    <h3><?= h($manager->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $manager->has('user') ? $this->Html->link($manager->user->id, ['controller' => 'Users', 'action' => 'view', $manager->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $manager->has('team') ? $this->Html->link($manager->team->name, ['controller' => 'Teams', 'action' => 'view', $manager->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($manager->id) ?></td>
        </tr>
    </table>
</div>

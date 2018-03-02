<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Location $location
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Location'), ['action' => 'edit', $location->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Location'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Training'), ['controller' => 'Training', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Training', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courts'), ['controller' => 'Courts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Court'), ['controller' => 'Courts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locations view col-sm-12">
    <h3><?= h($location->name) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($location->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Training') ?></th>
            <td><?= $location->has('training') ? $this->Html->link($location->training->id, ['controller' => 'Training', 'action' => 'view', $location->training->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Court') ?></th>
            <td><?= $location->has('court') ? $this->Html->link($location->court->id, ['controller' => 'Courts', 'action' => 'view', $location->court->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($location->id) ?></td>
        </tr>
    </table>
</div>

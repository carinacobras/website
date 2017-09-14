<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Court $court
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Court'), ['action' => 'edit', $court->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Court'), ['action' => 'delete', $court->id], ['confirm' => __('Are you sure you want to delete # {0}?', $court->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Court'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courts view large-9 medium-8 columns content">
    <h3><?= h($court->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($court->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($court->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location Id') ?></th>
            <td><?= $this->Number->format($court->location_id) ?></td>
        </tr>
    </table>
</div>

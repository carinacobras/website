<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Absence $absence
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Absence'), ['action' => 'edit', $absence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Absence'), ['action' => 'delete', $absence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $absence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Absences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Absence'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="absences view large-9 medium-8 columns content">
    <h3><?= h($absence->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $absence->has('player') ? $this->Html->link($absence->player->id, ['controller' => 'Players', 'action' => 'view', $absence->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($absence->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($absence->date) ?></td>
        </tr>
    </table>
</div>

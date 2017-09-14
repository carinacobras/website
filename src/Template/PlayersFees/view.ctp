<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\PlayersFee $playersFee
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Players Fee'), ['action' => 'edit', $playersFee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Players Fee'), ['action' => 'delete', $playersFee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playersFee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players Fees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Players Fee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fees'), ['controller' => 'Fees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fee'), ['controller' => 'Fees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="playersFees view large-9 medium-8 columns content">
    <h3><?= h($playersFee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($playersFee->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($playersFee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fee Id') ?></th>
            <td><?= $this->Number->format($playersFee->fee_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player Id') ?></th>
            <td><?= $this->Number->format($playersFee->player_id) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ladder $ladder
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ladder'), ['action' => 'edit', $ladder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ladder'), ['action' => 'delete', $ladder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ladder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ladders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ladder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ladders view col-sm-12">
    <h3><?= h($ladder->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Competition') ?></th>
            <td><?= $ladder->has('competition') ? $this->Html->link($ladder->competition->name, ['controller' => 'Competitions', 'action' => 'view', $ladder->competition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $ladder->has('player') ? $this->Html->link($ladder->player->id, ['controller' => 'Players', 'action' => 'view', $ladder->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ladder->id) ?></td>
        </tr>
    </table>
</div>

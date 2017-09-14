<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Training $training
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Training'), ['action' => 'edit', $training->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Training'), ['action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Training'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="training view large-9 medium-8 columns content">
    <h3><?= h($training->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $training->has('location') ? $this->Html->link($training->location->id, ['controller' => 'Locations', 'action' => 'view', $training->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($training->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($training->time) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Competitions') ?></h4>
        <?php if (!empty($training->competitions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Ladder Id') ?></th>
                <th scope="col"><?= __('Court Id') ?></th>
                <th scope="col"><?= __('Training Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($training->competitions as $competitions): ?>
            <tr>
                <td><?= h($competitions->id) ?></td>
                <td><?= h($competitions->name) ?></td>
                <td><?= h($competitions->year) ?></td>
                <td><?= h($competitions->time) ?></td>
                <td><?= h($competitions->comments) ?></td>
                <td><?= h($competitions->team_id) ?></td>
                <td><?= h($competitions->ladder_id) ?></td>
                <td><?= h($competitions->court_id) ?></td>
                <td><?= h($competitions->training_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Competitions', 'action' => 'view', $competitions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Competitions', 'action' => 'edit', $competitions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Competitions', 'action' => 'delete', $competitions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competitions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

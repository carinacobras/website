<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Team $team
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Uniforms'), ['controller' => 'Uniforms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uniform'), ['controller' => 'Uniforms', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uniform') ?></th>
            <td><?= $team->has('uniform') ? $this->Html->link($team->uniform->id, ['controller' => 'Uniforms', 'action' => 'view', $team->uniform->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Competition Id') ?></th>
            <td><?= $this->Number->format($team->competition_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Competitions') ?></h4>
        <?php if (!empty($team->competitions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col"><?= __('Ladder Id') ?></th>
                <th scope="col"><?= __('Courts Id') ?></th>
                <th scope="col"><?= __('Training Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->competitions as $competitions): ?>
            <tr>
                <td><?= h($competitions->id) ?></td>
                <td><?= h($competitions->name) ?></td>
                <td><?= h($competitions->year) ?></td>
                <td><?= h($competitions->time) ?></td>
                <td><?= h($competitions->comments) ?></td>
                <td><?= h($competitions->team_id) ?></td>
                <td><?= h($competitions->ladder_id) ?></td>
                <td><?= h($competitions->courts_id) ?></td>
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
    <div class="related">
        <h4><?= __('Related Coaches') ?></h4>
        <?php if (!empty($team->coaches)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->coaches as $coaches): ?>
            <tr>
                <td><?= h($coaches->id) ?></td>
                <td><?= h($coaches->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Coaches', 'action' => 'view', $coaches->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Coaches', 'action' => 'edit', $coaches->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Coaches', 'action' => 'delete', $coaches->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coaches->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

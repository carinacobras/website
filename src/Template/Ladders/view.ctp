<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ladder $ladder
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ladder'), ['action' => 'edit', $ladder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ladder'), ['action' => 'delete', $ladder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ladder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ladders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ladder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ladders view large-9 medium-8 columns content">
    <h3><?= h($ladder->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $ladder->has('player') ? $this->Html->link($ladder->player->id, ['controller' => 'Players', 'action' => 'view', $ladder->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ladder->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Competition Id') ?></th>
            <td><?= $this->Number->format($ladder->competition_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Competitions') ?></h4>
        <?php if (!empty($ladder->competitions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ladder->competitions as $competitions): ?>
            <tr>
                <td><?= h($competitions->id) ?></td>
                <td><?= h($competitions->name) ?></td>
                <td><?= h($competitions->year) ?></td>
                <td><?= h($competitions->time) ?></td>
                <td><?= h($competitions->comments) ?></td>
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

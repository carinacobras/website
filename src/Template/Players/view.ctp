<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Player $player
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Player'), ['action' => 'edit', $player->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Player'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ladders'), ['controller' => 'Ladders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ladder'), ['controller' => 'Ladders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fees'), ['controller' => 'Fees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fee'), ['controller' => 'Fees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="players view large-9 medium-8 columns content">
    <h3><?= h($player->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $player->has('user') ? $this->Html->link($player->user->id, ['controller' => 'Users', 'action' => 'view', $player->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($player->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ladders') ?></h4>
        <?php if (!empty($player->ladders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Rank') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($player->ladders as $ladders): ?>
            <tr>
                <td><?= h($ladders->id) ?></td>
                <td><?= h($ladders->rank) ?></td>
                <td><?= h($ladders->player_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ladders', 'action' => 'view', $ladders->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ladders', 'action' => 'edit', $ladders->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ladders', 'action' => 'delete', $ladders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ladders->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fees') ?></h4>
        <?php if (!empty($player->fees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Fees Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($player->fees as $fees): ?>
            <tr>
                <td><?= h($fees->id) ?></td>
                <td><?= h($fees->fees_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Fees', 'action' => 'view', $fees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Fees', 'action' => 'edit', $fees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fees', 'action' => 'delete', $fees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

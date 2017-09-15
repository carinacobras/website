<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Competition $competition
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competition'), ['action' => 'edit', $competition->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competition'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courts'), ['controller' => 'Courts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Court'), ['controller' => 'Courts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ladders'), ['controller' => 'Ladders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ladder'), ['controller' => 'Ladders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Training'), ['controller' => 'Training', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Training', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competitions view large-9 medium-8 columns content">
    <h3><?= h($competition->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($competition->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($competition->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Courts') ?></h4>
        <?php if (!empty($competition->courts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->courts as $courts): ?>
            <tr>
                <td><?= h($courts->id) ?></td>
                <td><?= h($courts->number) ?></td>
                <td><?= h($courts->competition_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Courts', 'action' => 'view', $courts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Courts', 'action' => 'edit', $courts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Courts', 'action' => 'delete', $courts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $courts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ladders') ?></h4>
        <?php if (!empty($competition->ladders)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->ladders as $ladders): ?>
            <tr>
                <td><?= h($ladders->id) ?></td>
                <td><?= h($ladders->competition_id) ?></td>
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
        <h4><?= __('Related Teams') ?></h4>
        <?php if (!empty($competition->teams)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->teams as $teams): ?>
            <tr>
                <td><?= h($teams->id) ?></td>
                <td><?= h($teams->name) ?></td>
                <td><?= h($teams->competition_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Training') ?></h4>
        <?php if (!empty($competition->training)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->training as $training): ?>
            <tr>
                <td><?= h($training->id) ?></td>
                <td><?= h($training->time) ?></td>
                <td><?= h($training->competition_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Training', 'action' => 'view', $training->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Training', 'action' => 'edit', $training->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Training', 'action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

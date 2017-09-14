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
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Managers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Managers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams Jerseys'), ['controller' => 'TeamsJerseys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teams Jersey'), ['controller' => 'TeamsJerseys', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Uniforms'), ['controller' => 'Uniforms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uniform'), ['controller' => 'Uniforms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="teams view large-9 medium-8 columns content">
    <h3><?= h($team->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($team->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Coaches') ?></h4>
        <?php if (!empty($team->coaches)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->coaches as $coaches): ?>
            <tr>
                <td><?= h($coaches->id) ?></td>
                <td><?= h($coaches->user_id) ?></td>
                <td><?= h($coaches->team_id) ?></td>
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
                <th scope="col"><?= __('Court Id') ?></th>
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
    <div class="related">
        <h4><?= __('Related Managers') ?></h4>
        <?php if (!empty($team->managers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->managers as $managers): ?>
            <tr>
                <td><?= h($managers->id) ?></td>
                <td><?= h($managers->user_id) ?></td>
                <td><?= h($managers->team_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Managers', 'action' => 'view', $managers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Managers', 'action' => 'edit', $managers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Managers', 'action' => 'delete', $managers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $managers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Players') ?></h4>
        <?php if (!empty($team->players)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->players as $players): ?>
            <tr>
                <td><?= h($players->id) ?></td>
                <td><?= h($players->user_id) ?></td>
                <td><?= h($players->team_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Players', 'action' => 'view', $players->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Players', 'action' => 'edit', $players->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Players', 'action' => 'delete', $players->id], ['confirm' => __('Are you sure you want to delete # {0}?', $players->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Teams Jerseys') ?></h4>
        <?php if (!empty($team->teams_jerseys)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->teams_jerseys as $teamsJerseys): ?>
            <tr>
                <td><?= h($teamsJerseys->id) ?></td>
                <td><?= h($teamsJerseys->number) ?></td>
                <td><?= h($teamsJerseys->team_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TeamsJerseys', 'action' => 'view', $teamsJerseys->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TeamsJerseys', 'action' => 'edit', $teamsJerseys->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TeamsJerseys', 'action' => 'delete', $teamsJerseys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamsJerseys->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Uniforms') ?></h4>
        <?php if (!empty($team->uniforms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uniform Colour Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($team->uniforms as $uniforms): ?>
            <tr>
                <td><?= h($uniforms->id) ?></td>
                <td><?= h($uniforms->uniform_colour_id) ?></td>
                <td><?= h($uniforms->team_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Uniforms', 'action' => 'view', $uniforms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Uniforms', 'action' => 'edit', $uniforms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Uniforms', 'action' => 'delete', $uniforms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uniforms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'PhoneNumbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'PhoneNumbers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Managers'), ['controller' => 'Managers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Manager'), ['controller' => 'Managers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Roles'), ['controller' => 'Roles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Roles', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= $user->has('phone_number') ? $this->Html->link($user->phone_number->id, ['controller' => 'PhoneNumbers', 'action' => 'view', $user->phone_number->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($user->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Coaches') ?></h4>
        <?php if (!empty($user->coaches)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->coaches as $coaches): ?>
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
    <div class="related">
        <h4><?= __('Related Managers') ?></h4>
        <?php if (!empty($user->managers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->managers as $managers): ?>
            <tr>
                <td><?= h($managers->id) ?></td>
                <td><?= h($managers->user_id) ?></td>
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
        <?php if (!empty($user->players)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->players as $players): ?>
            <tr>
                <td><?= h($players->id) ?></td>
                <td><?= h($players->user_id) ?></td>
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
        <h4><?= __('Related Roles') ?></h4>
        <?php if (!empty($user->roles)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->roles as $roles): ?>
            <tr>
                <td><?= h($roles->id) ?></td>
                <td><?= h($roles->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Roles', 'action' => 'view', $roles->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Roles', 'action' => 'edit', $roles->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Roles', 'action' => 'delete', $roles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roles->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

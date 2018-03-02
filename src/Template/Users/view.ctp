<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>

<div class="col-sm-12">
    <h3><?= h($user->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
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
        <h4><?= __('Coaches') ?></h4>
        <?php if (!empty($user->coaches)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->coaches as $coaches): ?>
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
        <h4><?= __('Emails') ?></h4>
        <?php if (!empty($user->emails)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->emails as $emails): ?>
            <tr>
                <td><?= h($emails->id) ?></td>
                <td><?= h($emails->address) ?></td>
                <td><?= h($emails->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Emails', 'action' => 'view', $emails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Emails', 'action' => 'edit', $emails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emails', 'action' => 'delete', $emails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Managers') ?></h4>
        <?php if (!empty($user->managers)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->managers as $managers): ?>
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
        <h4><?= __('Phone Numbers') ?></h4>
        <?php if (!empty($user->phone_numbers)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->phone_numbers as $phoneNumbers): ?>
            <tr>
                <td><?= h($phoneNumbers->id) ?></td>
                <td><?= h($phoneNumbers->number) ?></td>
                <td><?= h($phoneNumbers->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PhoneNumbers', 'action' => 'view', $phoneNumbers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PhoneNumbers', 'action' => 'edit', $phoneNumbers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PhoneNumbers', 'action' => 'delete', $phoneNumbers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneNumbers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Players') ?></h4>
        <?php if (!empty($user->players)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->players as $players): ?>
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
        <h4><?= __('Roles') ?></h4>
        <?php if (!empty($user->roles)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->roles as $roles): ?>
            <tr>
                <td><?= h($roles->id) ?></td>
                <td><?= h($roles->name) ?></td>
                <td><?= h($roles->user_id) ?></td>
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

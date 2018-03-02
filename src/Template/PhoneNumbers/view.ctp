<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\PhoneNumber $phoneNumber
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Phone Number'), ['action' => 'edit', $phoneNumber->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Phone Number'), ['action' => 'delete', $phoneNumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneNumber->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Number'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="phoneNumbers view col-sm-12">
    <h3><?= h($phoneNumber->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $phoneNumber->has('user') ? $this->Html->link($phoneNumber->user->id, ['controller' => 'Users', 'action' => 'view', $phoneNumber->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($phoneNumber->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($phoneNumber->number) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($phoneNumber->contacts)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Phone Number Id') ?></th>
                <th scope="col"><?= __('Emails Id') ?></th>
                <th scope="col"><?= __('Relationship Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($phoneNumber->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->id) ?></td>
                <td><?= h($contacts->player_id) ?></td>
                <td><?= h($contacts->first_name) ?></td>
                <td><?= h($contacts->last_name) ?></td>
                <td><?= h($contacts->phone_number_id) ?></td>
                <td><?= h($contacts->emails_id) ?></td>
                <td><?= h($contacts->relationship_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

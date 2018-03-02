<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $contacts
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'PhoneNumbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'PhoneNumbers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Relationships'), ['controller' => 'Relationships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relationship'), ['controller' => 'Relationships', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacts index col-sm-12">
    <h3><?= __('Contacts') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emails_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relationship_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= $this->Number->format($contact->id) ?></td>
                <td><?= $contact->has('player') ? $this->Html->link($contact->player->id, ['controller' => 'Players', 'action' => 'view', $contact->player->id]) : '' ?></td>
                <td><?= h($contact->first_name) ?></td>
                <td><?= h($contact->last_name) ?></td>
                <td><?= $contact->has('phone_number') ? $this->Html->link($contact->phone_number->number, ['controller' => 'PhoneNumbers', 'action' => 'view', $contact->phone_number->id]) : '' ?></td>
                <td><?= $contact->has('email') ? $this->Html->link($contact->email->id, ['controller' => 'Emails', 'action' => 'view', $contact->email->id]) : '' ?></td>
                <td><?= $contact->has('relationship') ? $this->Html->link($contact->relationship->title, ['controller' => 'Relationships', 'action' => 'view', $contact->relationship->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

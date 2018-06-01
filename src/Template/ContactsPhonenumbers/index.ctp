<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsPhonenumber[]|\Cake\Collection\CollectionInterface $contactsPhonenumbers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contacts Phonenumber'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'Phonenumbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'Phonenumbers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactsPhonenumbers index large-9 medium-8 columns content">
    <h3><?= __('Contacts Phonenumbers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phonenumber_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactsPhonenumbers as $contactsPhonenumber): ?>
            <tr>
                <td><?= $this->Number->format($contactsPhonenumber->id) ?></td>
                <td><?= $contactsPhonenumber->has('contact') ? $this->Html->link($contactsPhonenumber->contact->full_name, ['controller' => 'Contacts', 'action' => 'view', $contactsPhonenumber->contact->id]) : '' ?></td>
                <td><?= $contactsPhonenumber->has('phone_number') ? $this->Html->link($contactsPhonenumber->phone_number->id, ['controller' => 'Phonenumbers', 'action' => 'view', $contactsPhonenumber->phone_number->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactsPhonenumber->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactsPhonenumber->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactsPhonenumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsPhonenumber->id)]) ?>
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

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsEmail[]|\Cake\Collection\CollectionInterface $contactsEmails
 */
?>

<div class="contactsEmails index large-9 medium-8 columns content">
    <h3><?= __('Contacts Emails') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactsEmails as $contactsEmail): ?>
            <tr>
                <td><?= $contactsEmail->has('contact') ? $this->Html->link($contactsEmail->contact->full_name, ['controller' => 'Contacts', 'action' => 'view', $contactsEmail->contact->id]) : '' ?></td>
                <td><?= $contactsEmail->has('email') ? $this->Html->link($contactsEmail->email->email_address, ['controller' => 'Emails', 'action' => 'view', $contactsEmail->email->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactsEmail->contact_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactsEmail->contact_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactsEmail->contact_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsEmail->contact_id)]) ?>
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

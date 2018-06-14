<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsEmail[]|\Cake\Collection\CollectionInterface $contactsEmails
 */
?>

<div class="col-sm-12">
    <h3><?= __('Contacts Emails') ?></h3>
    <h3>Search contact emails</h3>
    <?= $this->Html->link(__('New Contact Email'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <input id="search" type="text" class="search form-control mb-3" placeholder="What you looking for?">
   <div class="table-responsive">
    <table id="searchabletable" class="table w-100 d-block d-md-table">
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
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactsEmail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactsEmail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactsEmail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsEmail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<?= $this->Html->script('table') ?>

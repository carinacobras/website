<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsEmail $contactsEmail
 */
?>

<div class="col-sm-12">
    <h3><?= h($contactsEmail->contact_id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $contactsEmail->has('contact') ? $this->Html->link($contactsEmail->contact->full_name, ['controller' => 'Contacts', 'action' => 'view', $contactsEmail->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= $contactsEmail->has('email') ? $this->Html->link($contactsEmail->email->email_address, ['controller' => 'Emails', 'action' => 'view', $contactsEmail->email->id]) : '' ?></td>
        </tr>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsPhonenumber $contactsPhonenumber
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contacts Phonenumber'), ['action' => 'edit', $contactsPhonenumber->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contacts Phonenumber'), ['action' => 'delete', $contactsPhonenumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsPhonenumber->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts Phonenumbers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacts Phonenumber'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'Phonenumbers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'Phonenumbers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contactsPhonenumbers view large-9 medium-8 columns content">
    <h3><?= h($contactsPhonenumber->contact_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $contactsPhonenumber->has('contact') ? $this->Html->link($contactsPhonenumber->contact->full_name, ['controller' => 'Contacts', 'action' => 'view', $contactsPhonenumber->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= $contactsPhonenumber->has('phone_number') ? $this->Html->link($contactsPhonenumber->phone_number->id, ['controller' => 'Phonenumbers', 'action' => 'view', $contactsPhonenumber->phone_number->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactsPhonenumber->id) ?></td>
        </tr>
    </table>
</div>

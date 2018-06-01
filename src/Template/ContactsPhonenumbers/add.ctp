<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsPhonenumber $contactsPhonenumber
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts Phonenumbers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['controller' => 'Phonenumbers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Phone Number'), ['controller' => 'Phonenumbers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contactsPhonenumbers form large-9 medium-8 columns content">
    <?= $this->Form->create($contactsPhonenumber) ?>
    <fieldset>
        <legend><?= __('Add Contacts Phonenumber') ?></legend>
        <?php
            echo $this->Form->control('contact_id', ['options' => $contacts]);
            echo $this->Form->control('phonenumber_id', ['options' => $phoneNumbers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

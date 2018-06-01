<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsEmail $contactsEmail
 */
?>

<div class="contactsEmails form large-9 medium-8 columns content">
    <?= $this->Form->create($contactsEmail) ?>
    <fieldset>
        <legend><?= __('Add Contacts Email') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

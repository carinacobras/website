<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsEmail $contactsEmail
 */
?>

<div class="contactsEmails form large-9 medium-8 columns content">
    <?= $this->Form->create($contactsEmail) ?>
    <fieldset>
        <legend><?= __('Edit Contacts Email') ?></legend>
        <?php
            echo $this->Form->control('contact_id', ['options' => $contacts]);
            echo $this->Form->control('email_id', ['options' => $emails]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsPhonenumber $contactsPhonenumber
 */
?>

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

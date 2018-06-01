<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsPhonenumber $contactsPhonenumber
 */
?>

<div class="contactsPhonenumbers form large-9 medium-8 columns content">
    <?= $this->Form->create($contactsPhonenumber) ?>
    <fieldset>
        <legend><?= __('Edit Contacts Phonenumber') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PhoneNumber $phoneNumber
 */
?>

<div class="phoneNumbers form large-9 medium-8 columns content">
    <?= $this->Form->create($phoneNumber) ?>
    <fieldset>
        <legend><?= __('Edit Phone Number') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

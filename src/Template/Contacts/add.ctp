<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="contacts form col-sm-12">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <?php
            echo $this->Form->control('player_id', ['options' => $players]);
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('phone_number');
            echo $this->Form->control('email_address');
            echo $this->Form->control('relationship_id', ['options' => $relationships]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

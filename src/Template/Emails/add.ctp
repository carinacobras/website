<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="emails form col-sm-12">
    <?= $this->Form->create($email) ?>
    <fieldset>
        <legend><?= __('Add Email') ?></legend>
        <?php
            echo $this->Form->control('address');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

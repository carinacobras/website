<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-sm-12">
    <?= $this->Form->create($coach) ?>
    <fieldset>
        <legend><?= __('Add Coach') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('team_id', ['options' => $teams, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

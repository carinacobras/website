<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-sm-12">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= __('Add Team') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('competition_id', ['options' => $competitions, 'empty' => true]);
            echo $this->Form->control('gender',  ['options' => ['None', 'Male', 'Female', 'Mixed'], 'empty' => false]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

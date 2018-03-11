<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="competitions form col-sm-12">
    <?= $this->Form->create($competition) ?>
    <fieldset>
        <legend><?= __('Add Competition') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

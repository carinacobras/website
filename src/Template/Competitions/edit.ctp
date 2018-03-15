<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="competitions form col-sm-12">
    <?= $this->Form->create($competition) ?>
    <fieldset>
        <legend><?= __('Edit Competition') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('age');
            echo $this->Form->control('gender');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training $training
 */
?>

<div class="col-sm-12">
    <?= $this->Form->create($training) ?>
    <fieldset>
        <legend><?= __('Edit Training') ?></legend>
        <?php
            echo $this->Form->control('time');
            echo $this->Form->control('competition_id', ['options' => $competitions]);
            echo $this->Form->control('location_id', ['options' => $locations]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-sm-12">
    <?= $this->Form->create($team) ?>
    <fieldset>
        <legend><?= __('Edit Team') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('competition_id', ['options' => $competitions, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $team->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $team->id),
                'class' => 'btn btn-primary']
            )
        ?>
    <?= $this->Form->end() ?>
</div>

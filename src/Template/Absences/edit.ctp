<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $absence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $absence->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Absences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="absences form col-sm-12">
    <?= $this->Form->create($absence) ?>
    <fieldset>
        <legend><?= __('Edit Absence') ?></legend>
        <?php
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('player_id', ['options' => $players]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

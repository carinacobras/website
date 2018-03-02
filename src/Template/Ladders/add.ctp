<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ladders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ladders form col-sm-12">
    <?= $this->Form->create($ladder) ?>
    <fieldset>
        <legend><?= __('Add Ladder') ?></legend>
        <?php
            echo $this->Form->control('competition_id', ['options' => $competitions]);
            echo $this->Form->control('player_id', ['options' => $players]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

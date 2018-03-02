<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courts'), ['controller' => 'Courts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Court'), ['controller' => 'Courts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ranks'), ['controller' => 'Ranks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rank'), ['controller' => 'Ranks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Training'), ['controller' => 'Training', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Training', 'action' => 'add']) ?></li>
    </ul>
</nav>
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

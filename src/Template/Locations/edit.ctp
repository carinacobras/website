<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $location->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Training'), ['controller' => 'Training', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Training'), ['controller' => 'Training', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courts'), ['controller' => 'Courts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Court'), ['controller' => 'Courts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locations form large-9 medium-8 columns content">
    <?= $this->Form->create($location) ?>
    <fieldset>
        <legend><?= __('Edit Location') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('training_id', ['options' => $training, 'empty' => true]);
            echo $this->Form->control('court_id', ['options' => $courts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

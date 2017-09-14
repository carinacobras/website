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
                ['action' => 'delete', $fee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fee->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fees Types'), ['controller' => 'FeesTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fees Type'), ['controller' => 'FeesTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fees form large-9 medium-8 columns content">
    <?= $this->Form->create($fee) ?>
    <fieldset>
        <legend><?= __('Edit Fee') ?></legend>
        <?php
            echo $this->Form->control('fees_type_id');
            echo $this->Form->control('players._ids', ['options' => $players]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

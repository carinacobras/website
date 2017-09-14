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
                ['action' => 'delete', $playersFee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $playersFee->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Players Fees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fees'), ['controller' => 'Fees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fee'), ['controller' => 'Fees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="playersFees form large-9 medium-8 columns content">
    <?= $this->Form->create($playersFee) ?>
    <fieldset>
        <legend><?= __('Edit Players Fee') ?></legend>
        <?php
            echo $this->Form->control('fee_id');
            echo $this->Form->control('player_id');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

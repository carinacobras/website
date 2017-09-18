<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Charge Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chargeTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($chargeType) ?>
    <fieldset>
        <legend><?= __('Add Charge Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('year');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

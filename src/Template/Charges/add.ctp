<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Charge Types'), ['controller' => 'ChargeTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge Type'), ['controller' => 'ChargeTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Invoices Item'), ['controller' => 'InvoicesItem', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoices Item'), ['controller' => 'InvoicesItem', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="charges form large-9 medium-8 columns content">
    <?= $this->Form->create($charge) ?>
    <fieldset>
        <legend><?= __('Add Charge') ?></legend>
        <?php
            echo $this->Form->control('order_id');
            echo $this->Form->control('charge_type_id', ['options' => $chargeTypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

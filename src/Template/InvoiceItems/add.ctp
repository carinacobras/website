<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Invoice Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="invoiceItems form large-9 medium-8 columns content">
    <?= $this->Form->create($invoiceItem) ?>
    <fieldset>
        <legend><?= __('Add Invoice Item') ?></legend>
        <?php
            echo $this->Form->control('invoice_id', ['options' => $invoices, 'empty' => true]);
            echo $this->Form->control('charge_id', ['options' => $charges]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

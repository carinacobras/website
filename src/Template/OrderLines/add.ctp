<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Order Lines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderLines form large-9 medium-8 columns content">
    <?= $this->Form->create($orderLine) ?>
    <fieldset>
        <legend><?= __('Add Order Line') ?></legend>
        <?php
            echo $this->Form->control('order_id', ['options' => $orders]);
            echo $this->Form->control('order_item_id', ['options' => $orderItems]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
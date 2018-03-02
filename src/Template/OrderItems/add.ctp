<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Order Lines'), ['controller' => 'OrderLines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Line'), ['controller' => 'OrderLines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderItems form col-sm-12">
    <?= $this->Form->create($orderItem) ?>
    <fieldset>
        <legend><?= __('Add Order Item') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

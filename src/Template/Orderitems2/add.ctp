<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Order Lines'), ['controller' => 'orderlines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Line'), ['controller' => 'orderlines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="Orderitems form col-sm-12">
    <?= $this->Form->create($orderitem) ?>
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

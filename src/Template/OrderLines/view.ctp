<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine $orderLine
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Line'), ['action' => 'edit', $orderLine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Line'), ['action' => 'delete', $orderLine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLine->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Lines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Line'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderLines view col-sm-12">
    <h3><?= h($orderLine->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $orderLine->has('order') ? $this->Html->link($orderLine->order->id, ['controller' => 'Orders', 'action' => 'view', $orderLine->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Item') ?></th>
            <td><?= $orderLine->has('order_item') ? $this->Html->link($orderLine->order_item->name, ['controller' => 'OrderItems', 'action' => 'view', $orderLine->order_item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderLine->id) ?></td>
        </tr>
    </table>
</div>

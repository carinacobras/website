<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\orderline $orderline
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Line'), ['action' => 'edit', $orderline->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Line'), ['action' => 'delete', $orderline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderline->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Lines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Line'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'Orderitems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'Orderitems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderlines view col-sm-12">
    <h3><?= h($orderline->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $orderline->has('order') ? $this->Html->link($orderline->order->id, ['controller' => 'Orders', 'action' => 'view', $orderline->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Item') ?></th>
            <td><?= $orderline->has('order_item') ? $this->Html->link($orderline->order_item->name, ['controller' => 'Orderitems', 'action' => 'view', $orderline->order_item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderline->id) ?></td>
        </tr>
    </table>
</div>

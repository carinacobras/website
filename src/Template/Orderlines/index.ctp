<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\orderline[]|\Cake\Collection\CollectionInterface $orderlines
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order Line'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'Orderitems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'Orderitems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderlines index col-sm-12">
    <h3><?= __('Order Lines') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_item_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderlines as $orderline): ?>
            <tr>
                <td><?= $this->Number->format($orderline->id) ?></td>
                <td><?= $orderline->has('order') ? $this->Html->link($orderline->order->id, ['controller' => 'Orders', 'action' => 'view', $orderline->order->id]) : '' ?></td>
                <td><?= $orderline->has('order_item') ? $this->Html->link($orderline->order_item->name, ['controller' => 'Orderitems', 'action' => 'view', $orderline->order_item->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderline->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderline->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderline->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
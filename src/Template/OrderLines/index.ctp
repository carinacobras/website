<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine[]|\Cake\Collection\CollectionInterface $orderLines
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order Line'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Items'), ['controller' => 'OrderItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Item'), ['controller' => 'OrderItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orderLines index col-sm-12">
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
            <?php foreach ($orderLines as $orderLine): ?>
            <tr>
                <td><?= $this->Number->format($orderLine->id) ?></td>
                <td><?= $orderLine->has('order') ? $this->Html->link($orderLine->order->id, ['controller' => 'Orders', 'action' => 'view', $orderLine->order->id]) : '' ?></td>
                <td><?= $orderLine->has('order_item') ? $this->Html->link($orderLine->order_item->name, ['controller' => 'OrderItems', 'action' => 'view', $orderLine->order_item->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderLine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderLine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderLine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLine->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

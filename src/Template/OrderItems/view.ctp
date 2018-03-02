<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderItem $orderItem
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Item'), ['action' => 'edit', $orderItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Item'), ['action' => 'delete', $orderItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Lines'), ['controller' => 'OrderLines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Line'), ['controller' => 'OrderLines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orderItems view col-sm-12">
    <h3><?= h($orderItem->name) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($orderItem->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($orderItem->price) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Order Lines') ?></h4>
        <?php if (!empty($orderItem->order_lines)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Order Item Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($orderItem->order_lines as $orderLines): ?>
            <tr>
                <td><?= h($orderLines->id) ?></td>
                <td><?= h($orderLines->order_id) ?></td>
                <td><?= h($orderLines->order_item_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'OrderLines', 'action' => 'view', $orderLines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'OrderLines', 'action' => 'edit', $orderLines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'OrderLines', 'action' => 'delete', $orderLines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLines->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

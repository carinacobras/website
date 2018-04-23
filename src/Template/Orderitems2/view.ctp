<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderItem $orderitem
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order Item'), ['action' => 'edit', $orderitem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order Item'), ['action' => 'delete', $orderitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderitem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Order Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Lines'), ['controller' => 'orderlines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Line'), ['controller' => 'orderlines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="Orderitems view col-sm-12">
    <h3><?= h($orderitem->name) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($orderitem->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($orderitem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($orderitem->price) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Order Lines') ?></h4>
        <?php if (!empty($orderitem->order_lines)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Order Item Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($orderitem->order_lines as $orderlines): ?>
            <tr>
                <td><?= h($orderlines->id) ?></td>
                <td><?= h($orderlines->order_id) ?></td>
                <td><?= h($orderlines->order_item_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'orderlines', 'action' => 'view', $orderlines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'orderlines', 'action' => 'edit', $orderlines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'orderlines', 'action' => 'delete', $orderlines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderlines->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order Lines'), ['controller' => 'OrderLines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order Line'), ['controller' => 'OrderLines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view col-sm-12">
    <h3><?= h($order->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $order->has('player') ? $this->Html->link($order->player->id, ['controller' => 'Players', 'action' => 'view', $order->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order Date') ?></th>
            <td><?= h($order->order_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($order->invoices)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Invoice Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->invoices as $invoices): ?>
            <tr>
                <td><?= h($invoices->id) ?></td>
                <td><?= h($invoices->order_id) ?></td>
                <td><?= h($invoices->invoice_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Invoices', 'action' => 'view', $invoices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Order Lines') ?></h4>
        <?php if (!empty($order->order_lines)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Order Id') ?></th>
                <th scope="col"><?= __('Order Item') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->order_lines as $orderLines): ?>
            <tr>
                <td><?= h($orderLines->id) ?></td>
                <td><?= h($orderLines->order_id) ?></td>
                <td><?= h($orderLines->order_item) ?></td>
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

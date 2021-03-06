<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
?>

<div class="col-sm-12">
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
            <?php foreach ($order->order_lines as $orderlines): ?>
            <tr>
                <td><?= h($orderlines->id) ?></td>
                <td><?= h($orderlines->order_id) ?></td>
                <td><?= h($orderlines->order_item) ?></td>
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

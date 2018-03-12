<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Invoice'), ['action' => 'edit', $invoice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Invoice'), ['action' => 'delete', $invoice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $invoice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Invoices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Invoice'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="invoices view col-sm-12">
    <h3><?= h($invoice->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $invoice->has('order') ? $this->Html->link($invoice->order->id, ['controller' => 'Orders', 'action' => 'view', $invoice->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Date') ?></th>
            <td><?= h($invoice->invoice_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paid') ?></th>
            <td><?= h($invoice->paid)?'Yes':'No' ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($invoice->payments)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Payment Date') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($invoice->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->payment_date) ?></td>
                <td><?= h($payments->amount) ?></td>
                <td><?= h($payments->player_id) ?></td>
                <td><?= h($payments->invoice_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

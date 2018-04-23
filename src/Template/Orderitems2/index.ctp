<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderItem[]|\Cake\Collection\CollectionInterface $Orderitems
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order Lines'), ['controller' => 'orderlines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order Line'), ['controller' => 'orderlines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="Orderitems index col-sm-12">
    <h3><?= __('Order Items') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Orderitems as $orderitem): ?>
            <tr>
                <td><?= $this->Number->format($orderitem->id) ?></td>
                <td><?= h($orderitem->name) ?></td>
                <td><?= $this->Number->format($orderitem->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $orderitem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderitem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderitem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderitem->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

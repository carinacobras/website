<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\orderline[]|\Cake\Collection\CollectionInterface $orderlines
 */
?>
<<<<<<< HEAD

=======
>>>>>>> 9b519c0af56cf69ca60ba726855c565b3d74b764
<div class="orderlines index col-sm-12">
    <h3><?= __('Order Lines') ?></h3>
    <?= $this->Html->link(__('New Order Line'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('player_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_item_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderlines as $orderline): ?>
            <tr>
                <td><?= h($orderline->player_name)?></td>
                <td><?= $orderline->has('order') ? $this->Html->link($orderline->order->id, ['controller' => 'Orders', 'action' => 'view', $orderline->order->id]) : '' ?></td>
                <td><?= $this->Html->link($orderline->order_item_id, ['controller' => 'Orderitems', 'action' => 'view', $orderline->order_item_id]) ?></td>
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

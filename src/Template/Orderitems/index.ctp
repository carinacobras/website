<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderItem[]|\Cake\Collection\CollectionInterface $Orderitems
 */
?>
<div class="col-sm-12">
    <h3><?= __('Order Items') ?></h3>
    <?= $this->Html->link(__('New Order Item'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
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
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PhoneNumber[]|\Cake\Collection\CollectionInterface $phoneNumbers
 */
?>

<div class="col-sm-12">
    <h3><?= __('Phone Numbers') ?></h3>
    <?= $this->Html->link(__('New Phone Number'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($phoneNumbers as $phoneNumber): ?>
            <tr>
                <td><?= $phoneNumber->number ?></td>
                <td><?= $phoneNumber->has('user') ? $this->Html->link($phoneNumber->user->full_name, ['controller' => 'Users', 'action' => 'view', $phoneNumber->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $phoneNumber->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $phoneNumber->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $phoneNumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $phoneNumber->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

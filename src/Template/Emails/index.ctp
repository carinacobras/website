<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Email[]|\Cake\Collection\CollectionInterface $emails
  */
?>

<div class="col-sm-12">
    <h3><?= __('Emails') ?></h3>
    <?= $this->Html->link(__('New Email Address'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emails as $email): ?>
            <tr>
                <td><?= $this->Number->format($email->id) ?></td>
                <td><?= h($email->address) ?></td>
                <td><?= $email->has('user') ? $this->Html->link($email->user->first_name . ' ' . $email->user->last_name, ['controller' => 'Users', 'action' => 'view', $email->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $email->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $email->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

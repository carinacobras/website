<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Absence[]|\Cake\Collection\CollectionInterface $absences
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Absence'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="absences index col-sm-12">
    <h3><?= __('Absences') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($absences as $absence): ?>
            <tr>
                <td><?= $this->Number->format($absence->id) ?></td>
                <td><?= h($absence->date) ?></td>
                <td><?= $absence->has('player') ? $this->Html->link($absence->player->id, ['controller' => 'Players', 'action' => 'view', $absence->player->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $absence->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $absence->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $absence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $absence->id)]) ?>
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

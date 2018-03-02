<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ladder[]|\Cake\Collection\CollectionInterface $ladders
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ladder'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Players'), ['controller' => 'Players', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Player'), ['controller' => 'Players', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ladders index large-9 medium-8 columns content">
    <h3><?= __('Ladders') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ladders as $ladder): ?>
            <tr>
                <td><?= $this->Number->format($ladder->id) ?></td>
                <td><?= $ladder->has('competition') ? $this->Html->link($ladder->competition->name, ['controller' => 'Competitions', 'action' => 'view', $ladder->competition->id]) : '' ?></td>
                <td><?= $ladder->has('player') ? $this->Html->link($ladder->player->id, ['controller' => 'Players', 'action' => 'view', $ladder->player->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ladder->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ladder->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ladder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ladder->id)]) ?>
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

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TeamsJersey[]|\Cake\Collection\CollectionInterface $teamsJerseys
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Teams Jersey'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamsJerseys index large-9 medium-8 columns content">
    <h3><?= __('Teams Jerseys') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colour') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teamsJerseys as $teamsJersey): ?>
            <tr>
                <td><?= $this->Number->format($teamsJersey->id) ?></td>
                <td><?= $this->Number->format($teamsJersey->number) ?></td>
                <td><?= $teamsJersey->has('team') ? $this->Html->link($teamsJersey->team->name, ['controller' => 'Teams', 'action' => 'view', $teamsJersey->team->id]) : '' ?></td>
                <td><?= h($teamsJersey->colour) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teamsJersey->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamsJersey->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamsJersey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamsJersey->id)]) ?>
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

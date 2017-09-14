<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Uniform[]|\Cake\Collection\CollectionInterface $uniforms
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Uniform'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Uniform Colours'), ['controller' => 'UniformColours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Uniform Colour'), ['controller' => 'UniformColours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="uniforms index large-9 medium-8 columns content">
    <h3><?= __('Uniforms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uniform_colours_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($uniforms as $uniform): ?>
            <tr>
                <td><?= $this->Number->format($uniform->id) ?></td>
                <td><?= $this->Number->format($uniform->number) ?></td>
                <td><?= $uniform->has('uniform_colour') ? $this->Html->link($uniform->uniform_colour->name, ['controller' => 'UniformColours', 'action' => 'view', $uniform->uniform_colour->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $uniform->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $uniform->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $uniform->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uniform->id)]) ?>
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

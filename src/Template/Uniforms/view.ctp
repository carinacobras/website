<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Uniform $uniform
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Uniform'), ['action' => 'edit', $uniform->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Uniform'), ['action' => 'delete', $uniform->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uniform->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Uniforms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uniform'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Uniform Colours'), ['controller' => 'UniformColours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uniform Colour'), ['controller' => 'UniformColours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="uniforms view large-9 medium-8 columns content">
    <h3><?= h($uniform->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uniform Colour') ?></th>
            <td><?= $uniform->has('uniform_colour') ? $this->Html->link($uniform->uniform_colour->name, ['controller' => 'UniformColours', 'action' => 'view', $uniform->uniform_colour->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($uniform->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($uniform->number) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Teams') ?></h4>
        <?php if (!empty($uniform->teams)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col"><?= __('Uniform Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($uniform->teams as $teams): ?>
            <tr>
                <td><?= h($teams->id) ?></td>
                <td><?= h($teams->competition_id) ?></td>
                <td><?= h($teams->uniform_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \Cake\Datasource\EntityInterface $uniformColour
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Uniform Colour'), ['action' => 'edit', $uniformColour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Uniform Colour'), ['action' => 'delete', $uniformColour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uniformColour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Uniform Colours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uniform Colour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Uniforms'), ['controller' => 'Uniforms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uniform'), ['controller' => 'Uniforms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="uniformColours view large-9 medium-8 columns content">
    <h3><?= h($uniformColour->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($uniformColour->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($uniformColour->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Uniforms') ?></h4>
        <?php if (!empty($uniformColour->uniforms)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uniform Colour Id') ?></th>
                <th scope="col"><?= __('Team Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($uniformColour->uniforms as $uniforms): ?>
            <tr>
                <td><?= h($uniforms->id) ?></td>
                <td><?= h($uniforms->uniform_colour_id) ?></td>
                <td><?= h($uniforms->team_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Uniforms', 'action' => 'view', $uniforms->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Uniforms', 'action' => 'edit', $uniforms->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Uniforms', 'action' => 'delete', $uniforms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uniforms->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

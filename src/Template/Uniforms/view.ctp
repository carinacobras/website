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
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $uniform->has('team') ? $this->Html->link($uniform->team->name, ['controller' => 'Teams', 'action' => 'view', $uniform->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($uniform->id) ?></td>
        </tr>
    </table>
</div>

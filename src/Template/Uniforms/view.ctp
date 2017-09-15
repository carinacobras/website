<?php
/**
  * @var \App\View\AppView $this
  * @var \Cake\Datasource\EntityInterface $uniform
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Uniform'), ['action' => 'edit', $uniform->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Uniform'), ['action' => 'delete', $uniform->id], ['confirm' => __('Are you sure you want to delete # {0}?', $uniform->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Uniforms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Uniform'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="uniforms view large-9 medium-8 columns content">
    <h3><?= h($uniform->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($uniform->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uniform Colour Id') ?></th>
            <td><?= $this->Number->format($uniform->uniform_colour_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Id') ?></th>
            <td><?= $this->Number->format($uniform->team_id) ?></td>
        </tr>
    </table>
</div>

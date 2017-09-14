<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\FeesType $feesType
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fees Type'), ['action' => 'edit', $feesType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fees Type'), ['action' => 'delete', $feesType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feesType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fees Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fees Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="feesTypes view large-9 medium-8 columns content">
    <h3><?= h($feesType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($feesType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($feesType->id) ?></td>
        </tr>
    </table>
</div>

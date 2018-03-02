<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Training $training
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Training'), ['action' => 'edit', $training->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Training'), ['action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Training'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Training'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="training view col-sm-12">
    <h3><?= h($training->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Competition') ?></th>
            <td><?= $training->has('competition') ? $this->Html->link($training->competition->name, ['controller' => 'Competitions', 'action' => 'view', $training->competition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($training->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($training->time) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Locations') ?></h4>
        <?php if (!empty($training->locations)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Training Id') ?></th>
                <th scope="col"><?= __('Court Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($training->locations as $locations): ?>
            <tr>
                <td><?= h($locations->id) ?></td>
                <td><?= h($locations->name) ?></td>
                <td><?= h($locations->training_id) ?></td>
                <td><?= h($locations->court_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Locations', 'action' => 'view', $locations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Locations', 'action' => 'edit', $locations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Locations', 'action' => 'delete', $locations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training $training
 */
?>

<div class="col-sm-12">
    <h3><?= h($training->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Competition') ?></th>
            <td><?= $training->has('competition') ? $this->Html->link($training->competition->name, ['controller' => 'Competitions', 'action' => 'view', $training->competition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $training->has('location') ? $this->Html->link($training->location->name, ['controller' => 'Locations', 'action' => 'view', $training->location->id]) : '' ?></td>
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
</div>

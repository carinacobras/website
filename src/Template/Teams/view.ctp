<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Team $team
  */
?>

<div class="col-sm-12">
    <h3><?= h($team->name) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($team->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($team->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Competition') ?></th>
            <td><?= $team->has('competition') ? $this->Html->link($team->competition->name, ['controller' => 'Competitions', 'action' => 'view', $team->competition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($team->id) ?></td>
        </tr>
    </table>
</div>

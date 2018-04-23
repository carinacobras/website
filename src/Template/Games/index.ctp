<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game[]|\Cake\Collection\CollectionInterface $games
 */
?>

<div class="games index large-9 medium-8 columns content">
    <h3><?= __('Games') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($games as $game): ?>
            <tr>
                <td><?= h($game->time) ?></td>
                <td><?= $game->has('competition') ? $this->Html->link($game->competition->name, ['controller' => 'Competitions', 'action' => 'view', $game->competition->id]) : '' ?></td>
                <td><?= $game->has('location') ? $this->Html->link($game->location->name, ['controller' => 'Locations', 'action' => 'view', $game->location->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $game->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $game->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

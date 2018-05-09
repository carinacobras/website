<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location $location
 */
?>

<div class="locations view large-9 medium-8 columns content">
    <h3><?= h($location->name) ?></h3>
    <? echo html_entity_decode($location->map) ?>
    <div class="related">
        <h4><?= __('Related Games') ?></h4>
        <?php if (!empty($location->games)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($location->games as $games): ?>
            <tr>
                <td><?= h($games->time) ?></td>
                <td><?= h($games->competition_id) ?></td>
                <td><?= h($games->location_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Games', 'action' => 'view', $games->id]) ?>
                    <!-- <?= $this->Html->link(__('Edit'), ['controller' => 'Games', 'action' => 'edit', $games->id]) ?> -->
                    <!-- <?= $this->Form->postLink(__('Delete'), ['controller' => 'Games', 'action' => 'delete', $games->id], ['confirm' => __('Are you sure you want to delete # {0}?', $games->id)]) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Training') ?></h4>
        <?php if (!empty($location->training)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col"><?= __('Location Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($location->training as $training): ?>
            <tr>
                <td><?= h($training->time) ?></td>
                <td><?= h($training->competition_id) ?></td>
                <td><?= h($training->location_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Training', 'action' => 'view', $training->id]) ?>
                    <!-- <?= $this->Html->link(__('Edit'), ['controller' => 'Training', 'action' => 'edit', $training->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Training', 'action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id)]) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

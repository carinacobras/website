<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location[]|\Cake\Collection\CollectionInterface $locations
 */
?>
<div class="col-sm-12">
    <h3><?= __('Locations') ?></h3>
    <?= $this->Html->link(__('New Location'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('court') ?></th>
                <? if($is_admin): ?>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                <? endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locations as $location): ?>
           
            <tr>
                <td><?= h($location->name) ?></td>
                <td><?= $this->Number->format($location->court) ?></td>
                <? if($is_admin): ?>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $location->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?>
                </td>
            </tr>
            <? endif; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

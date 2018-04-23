<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training[]|\Cake\Collection\CollectionInterface $training
 */
?>

<div class="col-sm-12">
    <h3><?= __('Training') ?></h3>
    <?= $this->Html->link(__('New Training'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <?
            $session = $this->request->getSession();
            $user_data = $session->read('Auth.User');
            if($user_data):
        ?>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            <? endif; ?>
            </tr>
        </thead>
        <?
            $session = $this->request->getSession();
            $user_data = $session->read('Auth.User');
            if($user_data):
        ?>

        <tbody>
            <?php foreach ($training as $training): ?>
            <tr>
                <td><?= h($training->time) ?></td>
                <td><?= $training->has('competition') ? $this->Html->link($training->competition->name, ['controller' => 'Competitions', 'action' => 'view', $training->competition->id]) : '' ?></td>
                <td><?= $training->has('location') ? $this->Html->link($training->location->name, ['controller' => 'Locations', 'action' => 'view', $training->location->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $training->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $training->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Team[]|\Cake\Collection\CollectionInterface $teams
  */
?>

<div class="col-sm-12">
    <h3><?= __('Teams') ?></h3>
    <?= $this->Html->link(__('New Team'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Team Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('Gender') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teams as $team): ?>
            <tr>
                <td><?= $this->Number->format($team->id) ?></td>
                <td><?= h($team->name) ?></td>
                <td>
                    <?php 
                    if ($team->gender == 0) {
                        echo 'None';
                    }
                    if ($team->gender == 1) {
                        echo 'Male';
                    }
                    if ($team->gender == 2) {
                        echo 'Female';
                    }
                    if ($team->gender == 3) {
                        echo 'Mixed';
                    }
                    ?>
                </td>
                <td><?= $team->has('competition') ? $this->Html->link($team->competition->name, ['controller' => 'Competitions', 'action' => 'view', $team->competition->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $team->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $team->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $team->id], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination-large">
    <ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div>
</div>

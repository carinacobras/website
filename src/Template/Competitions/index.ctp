<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Competition[]|\Cake\Collection\CollectionInterface $competitions
  */
?>

<div class="competitions index col-sm-12">
    <h3><?= __('Competitions') ?></h3>
    <?= $this->Html->link(__('New Competition'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Competition') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Age') ?></th>
				<th scope="col"><?= $this->Paginator->sort('Gender') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($competitions as $competition): ?>
            <tr>
                <td><?= $this->Number->format($competition->id) ?></td>
                <td><?= h($competition->name) ?></td>
                <td><?= $this->Number->format($competition->age) ?></td>
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
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $competition->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $competition->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $competition->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competition->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Competition[]|\Cake\Collection\CollectionInterface $competitions
  */
?>

<div class="competitions index col-sm-12">
    <h3><?= __('Competitions') ?></h3>
    <?= $this->Html->link(__('New Competition'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
     <h3>Search players</h3>
    <input id="search" type="text" class="search form-control mb-3" placeholder="What you looking for?">
   <div class="table-responsive">
    <table id="searchabletable" class="table w-100 d-block d-md-table">
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
                    if ($competition->gender == 0) {
                        echo 'None';
                    }
                    if ($competition->gender == 1) {
                        echo 'Male';
                    }
                    if ($competition->gender == 2) {
                        echo 'Female';
                    }
                    if ($competition->gender == 3) {
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
</div>
</div>
<?= $this->Html->script('table') ?>

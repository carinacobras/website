<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\TeamsJersey[]|\Cake\Collection\CollectionInterface $teamsJerseys
  */
?>

<div class="col-sm-12">
    <h3><?= __('Teams Jerseys') ?></h3>
    <?= $this->Html->link(__('New Jersey'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
 <h3>Search jerseys</h3>
 <input id="search" type="text" class="search form-control mb-3" placeholder="What you looking for?">
   <div class="table-responsive">
   <table id="searchabletable" class="table w-100 d-block d-md-table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colour') ?></th>
                <?
                    $session = $this->request->getSession();
                    $user_data = $session->read('Auth.User');
                    if($user_data && $user_data['role_id'] == 2):
                ?>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                    <? endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teamsJerseys as $teamsJersey): ?>
            <tr>
                <td><?= $this->Number->format($teamsJersey->id) ?></td>
                <td><?= $this->Number->format($teamsJersey->number) ?></td>
                <td><?= $teamsJersey->has('team') ? $this->Html->link($teamsJersey->team->name, ['controller' => 'Teams', 'action' => 'view', $teamsJersey->team->id]) : '' ?></td>
                <td><?= $teamsJersey->has('team') ? $this->Html->link($competitions[$teamsJersey->team->competition_id], ['controller' => 'Competitions', 'action' => 'view', $teamsJersey->team->id]) : '' ?></td>
                <td><?= h($teamsJersey->colour) ?></td>
                <?
                    $session = $this->request->getSession();
                    $user_data = $session->read('Auth.User');
                    if($user_data && $user_data['role_id'] == 2):
                ?>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $teamsJersey->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $teamsJersey->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $teamsJersey->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teamsJersey->id)]) ?>
                </td>
                    <? endif; ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<?= $this->Html->script('table') ?>

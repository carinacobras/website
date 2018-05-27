<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Player[]|\Cake\Collection\CollectionInterface $players
  */
?>

<div class="col-sm-12">
    <h3><?= __('Players') ?></h3>
    <?= $this->Html->link(__('New Player'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <h3>Search players</h3>
    <input id="search" type="text" class="search form-control mb-3" placeholder="What you looking for?">
   <div class="table-responsive">
    <table id="searchabletable" class="table w-100 d-block d-md-table">
        <thead>
            <tr>
            <th scope="col"><?= $this->Paginator->sort('full_name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
            <th scope="col"><?= $this->Paginator->sort('height') ?></th>
            <th scope="col"><?= $this->Paginator->sort('experience') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($players as $player): ?>
            <tr>
                <td><?= $player->has('user') ? $this->Html->link($player->user->full_name, ['controller' => 'Users', 'action' => 'view', $player->user->id]) : '' ?></td>
                <td><?= $player->user->gender == 1 ? 'Male' : 'Female'  ?></td>
                <td><?= $this->Number->format($player->height) ?></td>
                <td><?= $player->experience ?></td>
                <td><?
                
                if (!empty($player->players_teams)) {
                    foreach ($teams as $team):
                        foreach ($player->players_teams as $player_teams):
                            if ($team->id === $player_teams->team_id):
                                echo "<p>" . $this->Html->link($team->full_title, ['controller' => 'Teams', 'action' => 'view', $team->id]) . "</p>";
                            endif;
                        endforeach;
                    endforeach;
                }

                ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $player->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $player->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $player->id], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<?= $this->Html->script('table') ?>
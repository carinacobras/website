<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlayersTeam[]|\Cake\Collection\CollectionInterface $playersTeams
 */
?>
<h3>Search players</h3>
    <input id="search" type="text" class="search form-control mb-3" placeholder="What you looking for?">
   <div class="table-responsive">
    <table id="searchabletable" class="table w-100 d-block d-md-table">
</div>
        
<div class="playersTeams index large-9 medium-8 columns content">
    <h3><?= __('Players Teams') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($playersTeams as $playersTeam): ?>
            <tr>
                <td><?= $this->Number->format($playersTeam->id) ?></td>
                <td><?= $playersTeam->has('player') ? $this->Html->link($playersTeam->player->full_name, ['controller' => 'Players', 'action' => 'view', $playersTeam->player->id]) : '' ?></td>
                <td><?= $playersTeam->has('team') ? $this->Html->link($playersTeam->team->full_title, ['controller' => 'Teams', 'action' => 'view', $playersTeam->team->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $playersTeam->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $playersTeam->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $playersTeam->id], ['confirm' => __('Are you sure you want to delete # {0}?', $playersTeam->id)]) ?>
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

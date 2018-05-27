<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlayersTeam $playersTeam
 */
?>

<div class="playersTeams view large-9 medium-8 columns content">
    <h3><?= h($playersTeam->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $playersTeam->has('player') ? $this->Html->link($playersTeam->player->full_name, ['controller' => 'Players', 'action' => 'view', $playersTeam->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $playersTeam->has('team') ? $this->Html->link($playersTeam->team->full_title, ['controller' => 'Teams', 'action' => 'view', $playersTeam->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($playersTeam->id) ?></td>
        </tr>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlayersTeam $playersTeam
 */
?>

<div class="playersTeams form large-9 medium-8 columns content">
    <?= $this->Form->create($playersTeam) ?>
    <fieldset>
        <legend><?= __('Add Players Team') ?></legend>
        <?php
            echo $this->Form->control('player_id', ['options' => $players]);
            echo $this->Form->control('team_id', ['options' => $teams]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

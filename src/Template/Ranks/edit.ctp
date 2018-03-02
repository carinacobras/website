<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rank $rank
 */
?>

<div class="col-sm-12">
    <?= $this->Form->create($rank) ?>
    <fieldset>
        <legend><?= __('Edit Rank') ?></legend>
        <?php
            echo $this->Form->control('competition_id', ['options' => $competitions]);
            echo $this->Form->control('player_id', ['options' => $players]);
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->input('rank', array(
                'type' => 'number',
                'min' => 1
              ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

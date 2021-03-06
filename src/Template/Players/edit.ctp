<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="players form col-sm-12">
    <?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('Edit Player') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('height');
            echo $this->Form->control('experience');
            // echo $this->Form->control('team_id', ['options' => $teams, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $player->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $player->id),
                'class' => 'btn btn-primary']
            )
        ?>
    <?= $this->Form->end() ?>
</div>

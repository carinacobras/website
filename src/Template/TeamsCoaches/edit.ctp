<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $teamsCoach->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teamsCoach->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teams Coaches'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamsCoaches form large-9 medium-8 columns content">
    <?= $this->Form->create($teamsCoach) ?>
    <fieldset>
        <legend><?= __('Edit Teams Coach') ?></legend>
        <?php
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->control('coach_id', ['options' => $coaches]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

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
                ['action' => 'delete', $teamsJersey->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $teamsJersey->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Teams Jerseys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamsJerseys form large-9 medium-8 columns content">
    <?= $this->Form->create($teamsJersey) ?>
    <fieldset>
        <legend><?= __('Edit Teams Jersey') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('team_id', ['options' => $teams]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

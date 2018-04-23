<?php
/**
  * @var \App\View\AppView $this
  */
  $colour_options = [
    'RED' => 'RED',
    'GREEN' => 'GREEN',
    'LIME GREEN' => 'LIME GREEN',
    'BLUE' => 'BLUE',
    'BLACK' => 'BLACK',
    'MAROON' => 'MAROON',
    'YELLOW' => 'YELLOW',
    'AQUA' => 'AQUA',
    'WHITE' => 'WHITE',
    'ORANGE' => 'ORANGE',
    'GREY' => 'GREY',
    'BROWN' => 'BROWN',
    'PURPLE' => 'PURPLE',
    'NAVY' => 'NAVY'
  ];
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Teams Jerseys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="teamsJerseys form col-sm-12">
    <?= $this->Form->create($teamsJersey) ?>
    <fieldset>
        <legend><?= __('Add Teams Jersey') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->control('colour', ['options' => $colour_options]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

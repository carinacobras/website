<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="games form large-9 medium-8 columns content">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Add Game') ?></legend>
        <?php
            echo $this->Form->control('time');
            echo $this->Form->control('competition_id', ['options' => $competitions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

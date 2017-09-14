<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Uniforms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Uniform Colours'), ['controller' => 'UniformColours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Uniform Colour'), ['controller' => 'UniformColours', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Team'), ['controller' => 'Teams', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="uniforms form large-9 medium-8 columns content">
    <?= $this->Form->create($uniform) ?>
    <fieldset>
        <legend><?= __('Add Uniform') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('uniform_colour_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

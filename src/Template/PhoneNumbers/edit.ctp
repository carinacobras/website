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
                ['action' => 'delete', $phoneNumber->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $phoneNumber->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Phone Numbers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="phoneNumbers form large-9 medium-8 columns content">
    <?= $this->Form->create($phoneNumber) ?>
    <fieldset>
        <legend><?= __('Edit Phone Number') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('users_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

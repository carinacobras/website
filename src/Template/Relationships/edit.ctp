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
                ['action' => 'delete', $relationship->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relationship->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Relationships'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="relationships form large-9 medium-8 columns content">
    <?= $this->Form->create($relationship) ?>
    <fieldset>
        <legend><?= __('Edit Relationship') ?></legend>
        <?php
            echo $this->Form->control('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

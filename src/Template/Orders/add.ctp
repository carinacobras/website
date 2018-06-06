<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="orders form col-sm-12">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Add Order') ?></legend>
        <?php
            echo $this->Form->hidden('order_date');
            echo $this->Form->control('player_id', ['options' => $players]);
        ?>
        <? echo $this->Form->control('orderitems', array('label' => 'Order items', 'class' => 'col-sm-10', 'type' => 'select',
    'multiple' => 'checkbox')); ?>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="Orderitems form col-sm-12">
    <?= $this->Form->create($orderitem) ?>
    <fieldset>
        <legend><?= __('Add Order Item') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

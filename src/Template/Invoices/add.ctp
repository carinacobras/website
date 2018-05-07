<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="col-sm-12">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Add Invoice') ?></legend>
        <?php
            echo $this->Form->control('order_id', ['options' => $orders]);
            echo $this->Form->control('invoice_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

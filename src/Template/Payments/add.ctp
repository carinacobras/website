<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="payments form col-sm-12">
    <?= $this->Form->create($payment) ?>
    <fieldset>
        <legend><?= __('Add Payment') ?></legend>
        <?php
            echo $this->Form->control('payment_date');
            echo $this->Form->control('amount');
            echo $this->Form->control('player_id', ['options' => $players]);
            echo $this->Form->control('invoice_id', ['options' => $invoices]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

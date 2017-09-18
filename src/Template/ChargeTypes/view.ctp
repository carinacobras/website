<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChargeType $chargeType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Charge Type'), ['action' => 'edit', $chargeType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Charge Type'), ['action' => 'delete', $chargeType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chargeType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Charge Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Charges'), ['controller' => 'Charges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Charge'), ['controller' => 'Charges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chargeTypes view large-9 medium-8 columns content">
    <h3><?= h($chargeType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($chargeType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($chargeType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($chargeType->year) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Charges') ?></h4>
        <?php if (!empty($chargeType->charges)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Invoice Id') ?></th>
                <th scope="col"><?= __('Charge Type Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($chargeType->charges as $charges): ?>
            <tr>
                <td><?= h($charges->id) ?></td>
                <td><?= h($charges->invoice_id) ?></td>
                <td><?= h($charges->charge_type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Charges', 'action' => 'view', $charges->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Charges', 'action' => 'edit', $charges->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Charges', 'action' => 'delete', $charges->id], ['confirm' => __('Are you sure you want to delete # {0}?', $charges->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Relationship $relationship
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Relationship'), ['action' => 'edit', $relationship->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Relationship'), ['action' => 'delete', $relationship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relationship->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Relationships'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relationship'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="relationships view large-9 medium-8 columns content">
    <h3><?= h($relationship->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($relationship->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($relationship->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($relationship->contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Phone Number Id') ?></th>
                <th scope="col"><?= __('Emails Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Relationship Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($relationship->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->id) ?></td>
                <td><?= h($contacts->phone_number_id) ?></td>
                <td><?= h($contacts->emails_id) ?></td>
                <td><?= h($contacts->first_name) ?></td>
                <td><?= h($contacts->last_name) ?></td>
                <td><?= h($contacts->relationship_id) ?></td>
                <td><?= h($contacts->player_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

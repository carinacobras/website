<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $contacts
  */
?>

     
<div class="contacts index col-sm-12">
    <h3><?= __('Contacts') ?></h3>
    <?= $this->Html->link(__('New Contact'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
 <h3>Search contacts</h3>
    <input id="search" type="text" class="search form-control mb-3" placeholder="What you looking for?">
   <div class="table-responsive">
    <table id="searchabletable" class="table w-100 d-block d-md-table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('player_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relationship_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= h($contact->first_name) ?></td>
                <td><?= h($contact->last_name) ?></td>
                <td><?= $contact->has('player') ? $this->Html->link($contact->player->full_name, ['controller' => 'Players', 'action' => 'view', $contact->player->id]) : '' ?></td>
                <td><?= $contact->has('relationship') ? $this->Html->link($contact->relationship->title, ['controller' => 'Relationships', 'action' => 'view', $contact->relationship->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
<?= $this->Html->script('table') ?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsPhonenumber[]|\Cake\Collection\CollectionInterface $contactsPhonenumbers
 */
?>

<div class="col-sm-12">
    <h3><?= __('Contacts Phonenumbers') ?></h3>
    <?= $this->Html->link(__('New Contact Phone Number'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <h3>Search contact phone numbers</h3>
    <input id="search" type="text" class="search form-control mb-3" placeholder="What you looking for?">
   <div class="table-responsive">
    <table id="searchabletable" class="table w-100 d-block d-md-table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phonenumber_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactsPhonenumbers as $contactsPhonenumber): ?>
            <tr>
                <td><?= $this->Number->format($contactsPhonenumber->id) ?></td>
                <td><?= $contactsPhonenumber->has('contact') ? $this->Html->link($contactsPhonenumber->contact->full_name, ['controller' => 'Contacts', 'action' => 'view', $contactsPhonenumber->contact->id]) : '' ?></td>
                <td><?= $contactsPhonenumber->has('phone_number') ? $this->Html->link($contactsPhonenumber->phone_number->id, ['controller' => 'Phonenumbers', 'action' => 'view', $contactsPhonenumber->phone_number->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactsPhonenumber->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactsPhonenumber->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactsPhonenumber->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsPhonenumber->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
    <?= $this->Html->script('table') ?>


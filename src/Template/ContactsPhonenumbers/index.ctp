<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsPhonenumber[]|\Cake\Collection\CollectionInterface $contactsPhonenumbers
 */
?>

<div class="contactsPhonenumbers index large-9 medium-8 columns content">
    <h3><?= __('Contacts Phonenumbers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('contact_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phonenumber_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactsPhonenumbers as $contactsPhonenumber): ?>
            <tr>
                <td><?= $contactsPhonenumber->has('contact') ? $this->Html->link($contactsPhonenumber->contact->full_name, ['controller' => 'Contacts', 'action' => 'view', $contactsPhonenumber->contact->id]) : '' ?></td>
                <td><?= $contactsPhonenumber->has('phonenumber') ? $this->Html->link($contactsPhonenumber->phonenumber->number, ['controller' => 'Phonenumbers', 'action' => 'view', $contactsPhonenumber->phonenumber->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contactsPhonenumber->contact_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contactsPhonenumber->contact_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contactsPhonenumber->contact_id], ['confirm' => __('Are you sure you want to delete # {0}?', $contactsPhonenumber->contact_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContactsPhonenumber $contactsPhonenumber
 */
?>

<div class="col-sm-12">
    <h3><?= h($contactsPhonenumber->contact_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $contactsPhonenumber->has('contact') ? $this->Html->link($contactsPhonenumber->contact->full_name, ['controller' => 'Contacts', 'action' => 'view', $contactsPhonenumber->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= $contactsPhonenumber->has('phone_number') ? $this->Html->link($contactsPhonenumber->phone_number->number, ['controller' => 'Phonenumbers', 'action' => 'view', $contactsPhonenumber->phone_number->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contactsPhonenumber->id) ?></td>
        </tr>
    </table>
</div>

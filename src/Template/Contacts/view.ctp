<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Contact $contact
  */
?>

<div class="contacts view col-sm-12">
    <h3><?= h($contact->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Player') ?></th>
            <td><?= $contact->has('player') ? $this->Html->link($contact->player->full_name, ['controller' => 'Players', 'action' => 'view', $contact->player->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($contact->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($contact->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relationship') ?></th>
            <td><?= $contact->has('relationship') ? $this->Html->link($contact->relationship->title, ['controller' => 'Relationships', 'action' => 'view', $contact->relationship->id]) : '' ?></td>
        </tr>
    </table>
</div>

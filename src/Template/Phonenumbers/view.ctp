<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PhoneNumber $phoneNumber
 */
?>

<div class="col-sm-12">
    <h3><?= h($phoneNumber->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $phoneNumber->has('user') ? $this->Html->link($phoneNumber->user->full_name, ['controller' => 'Users', 'action' => 'view', $phoneNumber->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $phoneNumber->number ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Email $email
  */
?>

<div class="emails view col-sm-12">
    <h3><?= h($email->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($email->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $email->has('user') ? $this->Html->link($email->user->id, ['controller' => 'Users', 'action' => 'view', $email->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($email->id) ?></td>
        </tr>
    </table>
</div>

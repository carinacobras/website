<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Email $email
  */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Email'), ['action' => 'edit', $email->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
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

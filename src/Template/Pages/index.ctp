<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page[]|\Cake\Collection\CollectionInterface $pages
 */
?>
<nav class="col-sm-12" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Page'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pages index col-sm-12">
    <h3><?= __('Pages') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('display_posts') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?= $this->Number->format($page->id) ?></td>
                <td><?= h($page->title) ?></td>
                <td><?= h($page->created) ?></td>
                <td><?= h($page->modified) ?></td>
                <td><?= h($page->display_posts) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $page->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $page->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */

?>

<div class="col-sm-12">
    <h3><?= h($newsletter->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= h($newsletter->subject) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($newsletter->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <? echo html_entity_decode($newsletter->body); ?>
    </div>
</div>

<?= $this->Form->create($newsletter) ?>
<?= $this->Form->button(__('Email everyone')) ?>
<?= $this->Form->end() ?>
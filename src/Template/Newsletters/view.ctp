<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */

?>

<div class="col-sm-12">
    <h3><?= h($newsletter->id) ?> : <?= $newsletter->subject ?></h3>
    <div class="row">
        <div class="col-sm-12 mt-4 mb-4 newsletter">
            <? echo html_entity_decode($newsletter->body); ?>
        </div>
    </div>
</div>

<?= $this->Form->create($newsletter) ?>
<?= $this->Form->button(__('Email everyone')) ?>
<?= $this->Form->end() ?>
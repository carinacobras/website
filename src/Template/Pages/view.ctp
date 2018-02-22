<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
    <div class="row">
        <?= h($page->title) ?>
        <?= $this->Text->autoParagraph(h($page->body)); ?>
    </div>
</div>

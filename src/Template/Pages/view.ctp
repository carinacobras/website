<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
    <div class="row">
        <h3><?= h($page->title) ?></h3>
        <?= $this->Text->($page->body) ?>
    </div>
</div>

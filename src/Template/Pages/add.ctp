<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>

<div class="pages form col-sm-12">
    <?= $this->Form->create($page) ?>
    <fieldset>
        <legend><?= __('Add Page') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('display_posts');
            echo $this->Form->control('body');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
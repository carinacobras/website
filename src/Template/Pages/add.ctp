<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>

<div class="pages form large-9 medium-8 columns content">
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

<script>
    tinymce.init({ selector:'textarea' });
</script>
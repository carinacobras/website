<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>

<nav class="navbar navbar-inverse navbar-toggleable">
    <ul class="navbar-nav nav-pills nav-fill w-100">
    <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $post->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $post->id),
                ['class' => 'btn btn-primary']]
            )
        ?></li>
    </ul>
</nav>

<div class="col-lg-9 col-md-8">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Edit Post') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('body');
            echo $this->Form->control('category_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<script>
    tinymce.init({ selector:'textarea' });
</script>
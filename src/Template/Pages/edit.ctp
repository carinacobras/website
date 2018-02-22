<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>

<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>

    <?= $this->Form->create($page) ?>
        <?php
        
            echo $this->Form->control('title', array('class' => 'form-control'));
            echo $this->Form->control('body', array('class' => 'form-control'));
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

<!-- Initialize Quill editor -->
<script>
    tinymce.init({ selector:'textarea' });
</script>
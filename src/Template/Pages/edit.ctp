<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>

<!-- Include Quill stylesheet -->
<link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">

    <?= $this->Form->create($page) ?>
    <!-- Create the toolbar container -->
    <div id="toolbar">
    <button class="ql-bold">Bold</button>
    <button class="ql-italic">Italic</button>
    </div>
        <?php
            echo $this->Form->control('title', array('class' => 'form-control'));
            echo $this->Form->control('body', array('id' => 'editor', 'default' => $page->body, 'class' => 'form-control'));
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var editor = new Quill('#editor', {
    modules: { toolbar: '#toolbar' },
    theme: 'snow'
  });
</script>
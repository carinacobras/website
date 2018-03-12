
<?php echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js'); ?>
<?php echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/plugins/code/plugin.js'); ?>
<?php echo $this->Html->script('//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/plugins/image/plugin.min.js'); ?>
<?php $this->TinymceElfinder->defineElfinderBrowser()?>
<script>
    tinymce.init(
        { selector:'textarea',
        file_browser_callback : elFinderBrowser,
        theme: "modern",
        plugins: "code image"
        });
</script>

<?php $this->TinymceElfinder->defineElfinderBrowser()?>
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/tinymce.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/plugins/code/plugin.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.1/plugins/image/plugin.min.js"></script>
<script>
    tinymce.init(
        { selector:'textarea',
        file_browser_callback : elFinderBrowser,
        theme: "modern",
            plugins: "code"});
</script>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
    <h3><?= h($page->title) ?></h3>
    <div><?= $page->body ?></p>
    <? 
        if ($page->display_posts) {
            foreach ($posts as $post) {
                echo "post";
            }
        }
    ?>

</div>

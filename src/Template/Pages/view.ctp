<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
    <h3><?= h($page->title) ?></h3>
    <div><?= $page->body ?></p>
    <?php if ($page->display_posts):?>
        <?php foreach($posts as $post): ?>
        <div class="card mt-5">
            <div class="card-header">
                <?php echo $post->title ?>
            </div>
            <div class="card-block">
                <p class="card-text"><?php echo $post->body ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif;?>

</div>

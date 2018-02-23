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
        <div class="card">
            <div class="card-header">
                <?php $post->title ?>
            </div>
            <div class="card-block">
                <p class="card-text"><?php $post->body ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif;?>

</div>

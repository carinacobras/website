<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>
    <h1><?= h($page->title) ?></h1>
    <div class="mb-5">
    <?php 

        if ($page->id == 3) {
            echo $this->Form->create($contact);
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('enquirytype', ['options' => ['Uniform Query', 'Fees Query', 'First Time Player', 'General Query', 'Change Contact Details']]);
            echo $this->Form->control('body');
            echo $this->Form->button('Submit');
            echo $this->Form->end();
        }
    ?>
    </div>
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

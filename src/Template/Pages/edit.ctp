<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>

    <?= $this->Form->create($page) ?>
        <?php
        
            echo $this->Form->control('title');
            echo $this->Form->control('display_posts');
            echo $this->Form->control('body', ['rows' => '50']);
        ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>

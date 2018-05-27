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
            echo $this->Form->control('enquirytype', ['label' => 'Enquiry Type', 'options' => ['Uniform Query', 'Fees Query', 'First Time Player', 'General Query', 'Change Contact Details']]);
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

 <?php if ($page->id == 8): ?>

    <?= $this->Html->link(__('New Training'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('competition_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_id') ?></th>
                <?
            $session = $this->request->getSession();
            $user_data = $session->read('Auth.User');
            if($user_data):
        ?>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            <? endif; ?>
            </tr>
        </thead>


        <tbody>
            <?php foreach ($training as $training): ?>
            <tr>
                <td><?
                $date = new DateTime($training->time);
                $newDate = $date->format('l H:i a'); 
                echo $newDate;
                ?></td>
                <td><?= $training->has('competition') ? $this->Html->link($training->competition->name, ['controller' => 'Competitions', 'action' => 'view', $training->competition->id]) : '' ?></td>
                <td><?= $training->has('location') ? $this->Html->link($training->location->name, ['controller' => 'Locations', 'action' => 'view', $training->location->id]) : '' ?></td>
                <?
                    $session = $this->request->getSession();
                    $user_data = $session->read('Auth.User');
                    if($user_data):
                ?>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'training', 'action' => 'view', $training->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'training', 'action' => 'edit', $training->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'training', 'action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id)]) ?>
                </td>
                <?php endif; ?>
            </tr>
                <?php endforeach; ?>
         
        </tbody>
    </table>
<? endif; ?>

</div>

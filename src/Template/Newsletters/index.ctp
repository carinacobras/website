<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter[]|\Cake\Collection\CollectionInterface $newsletters
 */
?>

<div class="col-sm-12">
    <h3><?= __('Newsletters') ?></h3>
    <p>You can access Newsletters from Carina Cobras by pressing 'view' in the table below. We send these to all our players and their contacts automatically.</p>
    <?
            $session = $this->request->getSession();
            $user_data = $session->read('Auth.User');
            if($user_data && $user_data['role_id'] == 2):
        ?>
    <?= $this->Html->link(__('New Newsletter'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3 mb-3']) ?>
    <? endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($newsletters as $newsletter): ?>
            <tr>
                <td><?= $this->Number->format($newsletter->id) ?></td>
                <td><?= h($newsletter->subject) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $newsletter->id]) ?>
                <?  $session = $this->request->getSession();
                $user_data = $session->read('Auth.User');
                if($user_data): ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $newsletter->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $newsletter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $newsletter->id)]) ?>
                    <? endif; ?>
                </td>
        
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

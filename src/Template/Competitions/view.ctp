<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Competition $competition
  */
?>

<div class="competitions view col-sm-12">
    <h3><?= h($competition->name) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($competition->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($competition->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Courts') ?></h4>
        <?php if (!empty($competition->courts)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ranks') ?></h4>
        <?php if (!empty($competition->Ranks)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->Ranks as $Ranks): ?>
            <tr>
                <td><?= h($Ranks->id) ?></td>
                <td><?= h($Ranks->competition_id) ?></td>
                <td><?= h($Ranks->player_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ranks', 'action' => 'view', $Ranks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ranks', 'action' => 'edit', $Ranks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ranks', 'action' => 'delete', $Ranks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $Ranks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Teams') ?></h4>
        <?php if (!empty($competition->teams)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->teams as $teams): ?>
            <tr>
                <td><?= h($teams->id) ?></td>
                <td><?= h($teams->name) ?></td>
                <td><?= h($teams->competition_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Teams', 'action' => 'view', $teams->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Teams', 'action' => 'edit', $teams->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Training') ?></h4>
        <?php if (!empty($competition->training)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competition->training as $training): ?>
            <tr>
                <td><?= h($training->id) ?></td>
                <td><?= h($training->time) ?></td>
                <td><?= h($training->competition_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Training', 'action' => 'view', $training->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Training', 'action' => 'edit', $training->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Training', 'action' => 'delete', $training->id], ['confirm' => __('Are you sure you want to delete # {0}?', $training->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Player $player
  */
?>

<div class="col-sm-12">
    <h3><?= h($player->user->first_name . ' ' . $player->user->last_name) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $player->has('user') ? $this->Html->link($player->user->first_name . ' ' . $player->user->last_name, ['controller' => 'Users', 'action' => 'view', $player->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $player->has('team') ? $this->Html->link($player->team->name, ['controller' => 'Teams', 'action' => 'view', $player->team->id]) : '' ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Absences') ?></h4>
        <?php if (!empty($player->absences)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($player->absences as $absences): ?>
            <tr>
                <td><?= h($absences->id) ?></td>
                <td><?= h($absences->date) ?></td>
                <td><?= h($absences->player_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Absences', 'action' => 'view', $absences->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Absences', 'action' => 'edit', $absences->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Absences', 'action' => 'delete', $absences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $absences->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Contacts') ?></h4>
        <?php if (!empty($player->contacts)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Phone Number Id') ?></th>
                <th scope="col"><?= __('Emails Id') ?></th>
                <th scope="col"><?= __('Relationship Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($player->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->first_name) ?></td>
                <td><?= h($contacts->last_name) ?></td>
                <td><?= h($contacts->phone_number->number) ?></td>
                <td><?= h($contacts->emails_id) ?></td>
                <td><?= h($contacts->relationship->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Ranks') ?></h4>
        <?php if (!empty($player->ranks)): ?>
        <table class="table">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Competition Id') ?></th>
                <th scope="col"><?= __('Player Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($player->ranks as $ranks): ?>
            <tr>
                <td><?= h($ranks->competition_id) ?></td>
                <td><?= h($ranks->rank) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ranks', 'action' => 'view', $ranks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ranks', 'action' => 'edit', $ranks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ranks', 'action' => 'delete', $ranks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ranks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

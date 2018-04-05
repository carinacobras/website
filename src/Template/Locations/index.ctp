<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Location[]|\Cake\Collection\CollectionInterface $locations
 */
?>
<div class="locations index large-9 medium-8 columns content">
    <h3><?= __('Locations') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locations as $location): ?>
            <tr>
                <td><?= $this->Number->format($location->id) ?></td>
                <td><?= h($location->name) ?></td>
                <td><?= $this->Number->format($location->court) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $location->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $location->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $location->id], ['confirm' => __('Are you sure you want to delete # {0}?', $location->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p class="scroll">
<?php
   $result = mysql_query("SELECT * FROM this ORDER BY name ASC");

    while ($row = mysql_fetch_array($result)) {
        echo "<div style='margin: 0 auto;'>
                    <span style='display:inline-block; width:200px; text-align:left;'>" . ucwords($row['name']) . "</span>
                    <span style='display:inline-block; text-align:left;'>" . ucwords($row['number']) . "</span>
                </div>
                <br>";
   }
?>
   </p>
 </font>
</div>
</div>

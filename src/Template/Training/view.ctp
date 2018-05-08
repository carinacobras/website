<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training $training
 */
?>

<div class="col-sm-12">
    <h3><?= h($training->id) ?></h3>
	<p> The clubs junior teams training times, days and locations are listed in the table below. Please bring along a full water bottle, some sports shoes with non marking soles and preferably a basketball if you have one.

Some age groups have multiple training sessions. You can attend 1 or more sessions per week. Beginners are encouraged to attend more than once per week (** new players see note below). Most sessions are run as a squad doing skills training but teams may split off to half court for more specific team training. We cannot train as specific teams without a venue or a coach available. The club is willing to book additional venues if we can find coaches available weekday afternoons or early evening.

Its important for you to check your emails each week as occasionally some venues are not available for training on certain dates throughout the year.

Some teams have specific training sessions run by their coaches that are not indicated below.  These sessions are open only to the teams involved and will be advised by the coach.</p>

    <table class="table">
        <tr>
            <th scope="row"><?= __('Competition') ?></th>
            <td><?= $training->has('competition') ? $this->Html->link($training->competition->name, ['controller' => 'Competitions', 'action' => 'view', $training->competition->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $training->has('location') ? $this->Html->link($training->location->name, ['controller' => 'Locations', 'action' => 'view', $training->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($training->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($training->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?=__('Team') ?></th>
            <td>
                <?= $training->has('team') ? $this->Html->link($training->team->name, ['controller' => 'Teams', 'action' => 'view', $training->team->id]) : ''?></td>
        </tr>  
    </table>
</div>

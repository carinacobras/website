<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competitions'), ['controller' => 'Competitions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competition'), ['controller' => 'Competitions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
    </ul>
</nav>

<div class="games form large-9 medium-8 columns content">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Add Game') ?></legend>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="input-group date" id="datetimepicker1">
                        <?php
                            echo $this->Form->text('time');
                        ?>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#datetimepicker1').datetimepicker({format: 'dddd, MMMM Do YYYY, h:mm a'});
                    });
                </script>
            </div>
        </div>
        <?php
            echo $this->Form->control('competition_id', ['options' => $competitions]);
            echo $this->Form->control('location_id', ['options' => $locations]);
            echo $this->Html->css('bootstrap-datetimepicker.min.css');
            echo $this->Html->script('moment.js');
            echo $this->Html->script('bootstrap-datetimepicker.min.js');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

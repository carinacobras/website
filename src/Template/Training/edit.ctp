<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Training $training
 */
?>

<div class="col-sm-12">
    <?= $this->Form->create($training) ?>
    <fieldset>
        <legend><?= __('Edit Training') ?></legend>
        <label for="time">Start Time</label>
                            <?php
                            echo $this->Form->input('time', [
                                'templates' => [
                                    'input' => '<input class="form-control datetimepicker-input" type="{{type}}" name="{{name}}" data-target="#datetimepicker1"/>',
                                    'inputContainer' => '<div class="form-group"><div class="input-group date" id="datetimepicker1" data-target-input="nearest">{{content}}<div class="input-group-addon" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div></div></div></div>'
                                ],
                                "type" => "text",
                                'label' => false
                                ]);
                            ?>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datetimepicker({format: 'dddd, MMMM Do YYYY, h:mm a'});]
							// Change to Start Time: Day of Week and Time and Finish Time: Day of Week and Time
                        });
                    </script>
        <?php
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->control('competition_id', ['options' => $competitions]);
            echo $this->Form->control('team_id', ['options' => $teams]);
            echo $this->Form->control('location_id', ['options' => $locations]);
            echo $this->Html->css('font-awesome.min.css');
            echo $this->Html->css('tempusdominus-bootstrap-4.min.css');
            echo $this->Html->script('moment.js');
            echo $this->Html->script('tempusdominus-bootstrap-4.min.js');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

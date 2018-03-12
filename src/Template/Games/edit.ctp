<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 */
?>

<div class="col-sm-12">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Edit Game') ?></legend>
        <label for="time">Time</label>
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
                            $('#datetimepicker1').datetimepicker({format: 'dddd, MMMM Do YYYY, h:mm a'});
                        });
                    </script>
        <?php
            echo $this->Form->control('competition_id', ['options' => $competitions]);
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

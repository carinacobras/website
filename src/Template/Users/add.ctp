<?php
/**
  * @var \App\View\AppView $this
  */
?>
<h2> New Player Forms</h2>
<h3> Please use the below form if you are a new player wanting to join Carina Cobras! We understand if you can't answer everything, but answering every question to the best of your ability will help allocate you a team </h3>
<div class="col-sm-12">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('role_id', [
            'options' => [1 => 'User', 2 => 'Admin']
            ]);
            echo $this->Form->control('username');
			echo $this->Form->control('password');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('Emails.0', array('label' => 'Email address'));
			echo $this->Form->input('dob', 
				['minYear' => date('Y') - 70,
				'maxYear' => date("Y") - 5,
				'day' => true,
				'month' => true,
                'year' => true,
                'templates' => [
                    'input' => '<input class="form-control datetimepicker-input" type="{{type}}" name="{{name}}" data-target="#datetimepicker1"/>',
                    'inputContainer' => '<div class="form-group"><div class="input-group date" id="datetimepicker1" data-target-input="nearest">{{content}}<div class="input-group-addon" data-target="#datetimepicker1" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div></div></div></div>'
                ],
                "type" => "text",
                'label' => false
                ]);
                
            echo $this->Form->control('gender', array('type' => 'radio', 'options' => ['No answer', 'Male', 'Female'] ));
            ?>
                 <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker1').datetimepicker({format: 'Do MMMM YYYY', defaultDate: "1/1/2013", 
                            minDate: "1/1/<?= date('Y') - 70 ?>", maxDate: "12/30/<?= date('Y') - 5 ?>" });
                        });
                    </script>
            <div class="form-users-ph">
                <input id="ph-add" class="float-right mt-4 btn btn-primary" name="ph-add" type="button" value="Add more"/>
            
                <div class="row">
                    <div class="col-sm-6 my-auto">
                    <? echo $this->Form->control('phonenumbers.0', array('label' => 'Phone number', 'class' => 'col-sm-10')); ?>
                    </div>
                    <div class="col-sm-4 my-auto">
                    </div>
                </div>
            </div>
               
                    <div class="player-form-container">  
                    <label class="form-check-label"><? echo $this->Form->checkbox('is_player') ?> Create player?             <div class="player-form-hidden">
                    <?php 
                        echo $this->Form->control('teams', ['options' => $teams, 'empty' => true, 'class' => 'form-control', 'multiple' => 'multiple', 'type' => 'select', 'style' => 'height:400px;']);
                        echo $this->Form->control('height');
                        echo $this->Form->control('experience');
                        echo $this->Html->css('font-awesome.min.css');
                        echo $this->Html->css('tempusdominus-bootstrap-4.min.css');
                        echo $this->Html->script('moment.js');
                        echo $this->Html->script('tempusdominus-bootstrap-4.min.js');
                    ?>
                    </div></label>
        
                </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->scriptStart(['block' => '']) ?>
        $(document).ready(function () {
            $("#ph-add").click(function(e) {
                e.preventDefault();
                
                var newRow = $(".form-users-ph .row").first().clone();
                rowCount = $(".form-users-ph .row").length;
                newRow.find(".form-control").each(function(i) {
                    $(this).attr('name', 'Phonenumbers['+ rowCount + ']');
                    $(this).attr('id', 'phonenumbers-'+ rowCount + '');
                });
                var delBtn = $.parseHTML('<input class="ph-remove float-right mt-4 btn btn-primary" name="ph-add" type="button" value="Remove"/>');
                newRow.find('.col-sm-4').append(delBtn);
                $('.form-users-ph').on('click', '.ph-remove', function(e) {
                    e.preventDefault();
                    $(this).parent().parent().remove();
                });
                $(".form-users-ph").append(newRow);
              });
        
        });
        <?= $this->Html->scriptEnd() ?>
</div>

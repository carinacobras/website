<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-sm-12">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('role', [
            'options' => ['user' => 'User', 'admin' => 'Admin', 'player'=> 'Player']
			]);
			echo $this->Form->control('email_address');
			echo $this->Form->control('password');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
			echo $this->Form->input('dob', 
				['minYear' => date('Y') - 70,
				'maxYear' => date("Y") - 5,
				'day' => true,
				'month' => true,
				'year' => true
				]
            echo $this->Form->control('gender');
            echo $this->Form->control('height');
			// add drop-down options
			echo $this->Form>control('current school');
			echo $this->Form->control('postal_address');
			echo $this->Form->control('playing experience');
			echo $this->Form->control('team_jersey');
			
        );
        
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

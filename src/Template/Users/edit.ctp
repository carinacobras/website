<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="col-sm-12">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('role', [
            'options' => ['user' => 'User', 'admin' => 'Admin']
            ]);
            echo $this->Form->control('username');
			echo $this->Form->control('password');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            if (!empty($user->emails)) {
                foreach ($user->emails as $key => $value) {
                    echo $this->Form->hidden("emails.".$key.".id");
                    echo $this->Form->control("emails.".$key.".email_address", array('value' => $key['email_address']));
                }
            }
			echo $this->Form->input('dob', 
				['minYear' => date('Y') - 70,
				'maxYear' => date("Y") - 5,
				'day' => true,
				'month' => true,
				'year' => true
                ]);
            echo $this->Form->control('gender', array('type' => 'radio', 'options' => ['No answer', 'Male', 'Female'] ));
            if (!empty($user->phonenumbers)) {
                foreach ($user->phonenumbers as $key => $value) {
                    echo $this->Form->hidden("phonenumbers.".$key.".id");
                    echo $this->Form->control("phonenumbers.".$key.".number", array('value' => $key['number']));
                }
            }

            ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id),
                'class' => 'btn btn-primary']
            )
        ?>
    <?= $this->Form->end() ?>
</div>

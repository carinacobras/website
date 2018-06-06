<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Newsletter $newsletter
 */

?>

<div class="col-sm-12">
    <h3><?= h($newsletter->id) ?> : <?= $newsletter->subject ?></h3>
    <div class="row">
        <div class="col-sm-12 mt-4 mb-4 newsletter">
            <? echo html_entity_decode($newsletter->body); ?>
        </div>
    </div>
</div>

<?= $this->Form->create($newsletter) ?>
<? 
$options = array(
    'label' => 'Submit',
    'id' => 'btn_newsletter_submit',
    'onclick' => 'newsLetterBtndisable()'
);

$session = $this->request->getSession();
$user_data = $session->read('Auth.User');
if($user_data && $user_data['role_id'] == 2) {

    echo $this->Form->button(__('Email everyone'), $options);
}
echo $this->Form->end() ?>

<?= $this->Html->scriptBlock("
    function newsLetterBtndisable() {
        $('#btn_newsletter_submit').text('Sending');
    }
");
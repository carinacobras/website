<?php

$urls = array(
    array(
        'label' => 'Home',
        'url' => '/'
    ),
    array(
        'label' => 'About Us',
        'url' => '/about'
    ),
    array(
        'label' => 'Fee Information',
        'url' => '/fees'
    ),
    array(
        'label' => 'Payments',
        'url' => '/payments'
    ),
    array(
        'label' => 'Contact Us',
        'url' => 'contact'
    )
    );
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta(
    'favicon.ico',
    '/favicon.ico',
    ['type' => 'icon']
) ?>

    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('styles') ?>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <?= $this->Html->script('bootstrap.min') ?>

</head>
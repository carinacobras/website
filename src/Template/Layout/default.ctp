<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'COBRAS JUNIORS - Carina, Carindale & District Basketball Club';

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;

$urls = array(
    array(
        'label' => 'Home',
        'url' => '/'
    ),
    array(
        'label' => 'About Us',
        'url' => array('controller' => 'pages', 'action' => 'about')
    ),
    array(
        'label' => 'Fee Information',
        'url' => array('controller' => 'pages', 'action' => 'fees')
    ),
    array(
        'label' => 'Payments',
        'url' => array('controller' => 'pages', 'action' => 'payments')
    ),
    array(
        'label' => 'Contact Us',
        'url' => array('controller' => 'pages', 'action' => 'contact')
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
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">


</head>
<body>
    <?= $this->Flash->render() ?>
    <nav class="navbar navbar-inverse bg-inverse">
<div class="justify-content-end" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-link text-right">
    <?php

    $session = $this->request->getSession(); // 3.5 or more
    $user_data = $session->read('Auth.User');

    //$loguser = $this->request->getSession()->read('Auth');

    if($user_data) {
        $loggedusername = $user_data['first_name'].' '.$user_data['last_name'];
        // user is logged in, show logout..user menu etc     
        $loglink = $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), ['class' => 'nav-link']); 
     } else {
        // the user is not logged in
        $loglink = $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'), ['class' => 'nav-link']); 
     }
    ?>

    <div class="media">
    <div class="media-body">
        <p><? if (isset($loggedusername)) echo $loggedusername; ?></p>
       
    </div>
    <? if (isset($loggedusername)) echo '<img class="d-flex ml-3" src="/img/blank-profile.png" alt="profile photo">'; ?>
    
    </div>
    <div class="align-self-end"><? echo $loglink; ?></div>
    </li>
    </ul>
    </div>
</nav>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<a class="navbar-brand" href="#">Carina Cobras</a>
<div class="collapse navbar-collapse" id="navbarNav2">
  <ul class="navbar-nav nav-fill w-100">

    <?php 
       foreach ($urls as $url) {
           $base = Router::url(null, false);
        $active = ($base === Router::normalize($url['url'])) ? 'active' : '' ;
        echo '<li class="nav-item text-center '.$active.'">'.$this->Html->link($url['label'], $url['url'], ['class' => 'nav-link']).'</li>' ;
    }
    ?>
  </ul>
</div>
</nav>

    <div class="container clearfix">
    <div class="content col-sm-12">
        <?= $this->fetch('content') ?>
    </div>
    </div>
    <footer>
    </footer>
</body>
</html>

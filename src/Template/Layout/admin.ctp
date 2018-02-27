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
<body>
    <?= $this->Flash->render() ?>
    <nav class="navbar navbar-inverse navbar-toggleable-xl ">
<div class="collapse navbar-collapse">

  <ul class="navbar-nav nav-justified ml-auto">
    <li class="nav-item">
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
        <p class="navbar-text text-nowrap mr-3"><? if (isset($loggedusername)) echo $loggedusername; ?></p>
    </li>
    
    <li class="nav-item">
    
        <? if (isset($loggedusername)) echo '<img class="col-sm-12 col-md-8 rounded-circle" src="/img/blank-profile.png" alt="profile photo">'; ?>
    
    </li>
        <li class="nav-item text-center"><? echo $loglink; ?></li>
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

    <div class="admin container-fluid clearfix">
        <div class="row">
            <div class="sidebar col-sm-2">
                <h2>Admin</h2>
                <ul>
                    <li><a href="/posts/">Posts</a></li>
                    <li><a href="/players/">Players</a></li>
                    <li><a href="/teams/">Teams</a></li>
                    <li><a href="/competitions/">Competitions</a></li>
                    <li><a href="/locations/">Locations</a></li>
                    <li><a href="/training/">Training</a></li>
                </ul>
            </div>
            <div class="content col-sm-10">
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>

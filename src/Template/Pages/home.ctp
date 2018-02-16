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
        'url' => array('controller' => 'pages', 'action' => 'home')
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

<body class="home">
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
<div class="justify-content-end collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-link">
    <?php
    if($this->request->session()->read('Auth')) {
        // user is logged in, show logout..user menu etc     
        echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout'), ['class' => 'nav-link']); 
     } else {
        // the user is not logged in
        echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login'), ['class' => 'nav-link']); 
     }
    ?>
    </li>
    </ul>
    </div>
</nav>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-success">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<a class="navbar-brand" href="#">Carina Cobras</a>
<div class="collapse navbar-collapse" id="navbarNav2">
  <ul class="navbar-nav nav-fill w-100">

  <?php 
       foreach ($urls as $url) {
        $active = (Router::normalize(Router::url()) === Router::normalize($url['url'])) ? 'active' : '' ;
        echo '<li class="nav-item text-center"'.$active.'">'.$this->Html->link($url['label'], $url['url'], ['class' => 'nav-link']).'</li>' ;
    }
    ?>
  </ul>
</div>
</nav>

<div class="row">
    <div class="columns large-12">
    </div>
</div>
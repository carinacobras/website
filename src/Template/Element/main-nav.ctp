<?php
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
        'url' => '/contact'
    ),
	array(
		'label' => 'Player Information',
		'url' => '/playerinformation',
		'subMenu' => array(
                array(
                    'label' => 'Training',
                    'url' => '/training',
                ),
                array(
                    'label' => 'Games',
                    'url'=> '/games',
                ),
        ),
	),
    );
?>


<nav class="main-nav navbar navbar-toggleable-md navbar-inverse bg-primary">
<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<a class="navbar-brand-cobra" href="#"><img src="/img/cobras-logo.png" alt="logo"/></a>

<div class="collapse navbar-collapse" id="navbarNav2">
  <ul class="navbar-nav nav-fill w-100">

    <?php 
       foreach ($urls as $url) {
        $base = Router::url(null, false);
        $has_submenu = array_key_exists('subMenu', $url);
        $active = ($base === Router::normalize($url['url'])) ? 'active' : '' ;
        $submenu_class = $has_submenu ? 'dropdown' : '';
        echo '<li class="nav-item text-center '.$active. ' ' . $submenu_class.'">'.$this->Html->link($url['label'], $url['url'], ['class' => 'nav-link']);
        if ($has_submenu) {
            echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
            $suburls = $url['subMenu'];
            foreach ($suburls as $suburl) {
                $this->Html->link($url['label'], $url['url'], ['class' => 'dropdown-item']);
            }
            echo '</div';
        }
        echo '</li>';
    }
    ?>
  </ul>
</div>
</nav>
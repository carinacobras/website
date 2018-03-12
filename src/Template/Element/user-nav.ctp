<nav class="navbar navbar-inverse bg-secondary mb-5 navbar-toggleable-xl ">
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
        <span class="navbar-text text-nowrap mr-3 p-3"><? if (isset($loggedusername)) echo $loggedusername; ?></span>
    </li>
    
    <li class="nav-item">
    
        <? if (isset($loggedusername)) echo '<img class="col-sm-12 col-md-8 rounded-circle" src="/img/blank-profile.png" alt="profile photo">'; ?>
    
    </li>
        <li class="nav-item text-center"><? echo $loglink; ?></li>
    </ul>

    </div>
</nav>
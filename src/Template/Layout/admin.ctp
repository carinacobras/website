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

?>

<?=$this->element('head') ?>
<body>
    <?=$this->element('user-nav') ?>
    <?=$this->element('main-nav') ?>
   
    <div class="admin container-fluid clearfix">
        <div class="row">
        <div class="col-sm-12 col-md-3">
        <div class="sidebar col-sm-12 col-md-10">
                    <h3>Admin Tasks</h3>
                    <ul>
                        <li><a href="/posts/">Edit posts</a></li>
                        <li><a href="/players/">Edit Players</a></li>
                        <li><a href="/teams/">Edit Teams</a></li>
                        <li><a href="/competitions/">Edit Competitions</a></li>
                        <li><a href="/locations/">Edit Locations</a></li>
                        <li><a href="/training/">Edit Training</a></li>
                    </ul>
        </div></div>
            <div class="content col-sm-12 col-sm-9">
            <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
<?=$this->element('footer') ?>
<?=$this->element('richtexteditor') ?>
</body>
</html>

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

?>
<?=$this->element('head') ?>
<body>
    <?= $this->Flash->render() ?>
    <?=$this->element('user-nav') ?>
    <?=$this->element('main-nav') ?>
    <div class="container clearfix">
    <div class="content col-sm-12">
        <?= $this->fetch('content') ?>
    </div>
    </div>
    <?=$this->element('footer') ?>
    <?=$this->element('richtexteditor') ?>
</body>
</html>

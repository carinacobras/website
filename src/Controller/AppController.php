<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

//require_once(ROOT . DS . 'vendor' . DS . "leafo" . DS . "scssphp" . DS . "scss.inc.php");

use Cake\Controller\Controller;
use Cake\Event\Event;
// use Leafo\ScssPhp\Compiler;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Pages',
                'action' => 'view', 
                1
            ],
            'logoutRedirect' => [
                'controller' => 'Pages',
                'action' => 'view',
                1
            ]
        ]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }


    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['role_id']) && $user['role_id'] === 2) {
            return true;
        }

        // Default deny
        return false;
    }
    

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'display']);
        
        if ($this->Auth->user('role_id') === 2) {
            $this->viewBuilder()->setLayout('admin');
            $this->set('is_admin', true);
        } else {
            $this->set('is_admin', false);
        }
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {
    //     // set the LESS file location
    //     $scss_dir = ROOT . DS . 'webroot' . DS . 'scss';

    //     // set the CSS file to be written
    //     $css = ROOT . DS . 'webroot' . DS . 'css' . DS . 'bootstrap.min.css';

    //     $scssc = new Compiler();

    //     $scssc->setImportPaths($scss_dir);

    //     // compile the file
    //    $compiledcss = $scssc->compile('@import "bootstrap.scss";');
    //     // Write the contents back to the file
    //     file_put_contents($css, $compiledcss);
                
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}

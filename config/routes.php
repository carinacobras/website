<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {

    $routes->connect('/', ['controller' => 'Pages', 'action' => 'view', 1]);

    $routes->connect('/about', ['controller' => 'Pages', 'action' => 'view', 2]);

    $routes->connect('/contact', ['controller' => 'Pages', 'action' => 'view', 3]);

    $routes->connect('/fees', ['controller' => 'Pages', 'action' => 'view', 4]);

    $routes->connect('/newplayer', ['controller' => 'Users', 'action' => 'add']);

    $routes->connect('/generalinformation', ['controller' => 'Pages', 'action' => 'view', 6]);

    $routes->connect('/results', ['controller' => 'Pages', 'action' => 'view', 7]);

    $routes->connect('/training', ['controller' => 'Pages', 'action' => 'view', 8]);

    $routes->connect('/uniforms', ['controller' => 'Pages', 'action' => 'view', 9]);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    //$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'view']);

    $routes->connect('/pages/:action/*', ['controller' => 'Pages', 'action' => 'view']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * Load all plugin routes. See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();

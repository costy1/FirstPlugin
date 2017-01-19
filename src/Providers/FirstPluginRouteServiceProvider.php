<?php
/**
 * Created by PhpStorm.
 * User: Constantin Purcaru
 * Date: 19/01/2017
 * Time: 10:33
 */

namespace FirstPlugin\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class FirstPluginRouteServiceProvider
 * @package FirstPlugin\Providers
 */
class FirstPluginRouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('plugin','FirstPlugin\Controllers\ContentController@showOnScreen');
    }
}
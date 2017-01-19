<?php
/**
 * Created by PhpStorm.
 * User: Constantin Purcaru
 * Date: 19/01/2017
 * Time: 10:27
 */

namespace FirstPlugin\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class FirstPluginServiceProvider
 * @package FirstPlugin\Providers
 */
class FirstPluginServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider
     */
    public function register()
    {
        $this->getApplication()->register(FirstPluginRouteServiceProvider::class);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Constantin Purcaru
 * Date: 19/01/2017
 * Time: 10:43
 */

namespace FirstPlugin\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

/**
 * Class ContentController
 * @package FirstPlugin\Controllers
 */
class ContentController extends Controller
{
    /**
     * @param Twig $twig
     * @return mixed
     */
    public function showOnScreen(Twig $twig):string
    {
        return $twig->render('FirstPlugin::content.first');
    }
}
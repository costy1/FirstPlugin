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

class ContentController extends Controller
{
    public function showOnScreen(Twig $twig)
    {
        return $twig->render('FirstPlugin::content.first');
    }
}
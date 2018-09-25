<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route(
     *      "/",
     *      defaults = {
     *          "_locale": "en"
     *      },
     *      condition = "'%uvdesk.welcome_community%' === 'enabled' ? true : false",
     *      name = "welcome_uvdesk_community"
     * )
     * 
     * @Route(
     *      "/{_locale}/",
     *      defaults = {
     *          "_locale": "en"
     *      },
     *      condition = "'%uvdesk.welcome_community%' === 'enabled' ? true : false",
     *      name = "welcome_uvdesk_community_locale"
     * )
     */
    public function welcome($_locale)
    {
        return $this->render('hello-world.html.twig');
    }
}

<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}/", defaults={"_locale": "en"}, condition="'%uvdesk_community_welcome%' === 'enabled' ? true : false", name="uvdesk_community_welcome")
     */
    public function index($_locale)
    {
        return $this->render('uvdesk-community.html.twig');
    }
}

<?php

namespace DWM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\request;
use DWM\UserBundle\Entity\User;
//Require Symfony Session Component
use Symfony\Component\HttpFoundation\Session;

class SecurityController extends Controller
{

    public function logoutAction(Request $request)
    {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('DWMUserBundle:Default:login.html.twig');

    }
}

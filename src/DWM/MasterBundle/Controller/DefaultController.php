<?php

namespace DWM\MasterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DWM\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $session = $this->getRequest()->getSession();

        if($session->has('loginUser')) { //Check whether user logged in already - > if true
            /*
                        $loginUser = new User();
                        $loginUser = $session->get('loginUser');
                        $email = $loginUser->getUsername();
                        $UserName = explode("@", $email);
               */
            return $this->render('DWMMasterBundle:Default:index.html.twig');
        }
        else{//if false - > User not logged in....

            return $this->render('DWMUserBundle:Default:login.html.twig');
        }


    }
}

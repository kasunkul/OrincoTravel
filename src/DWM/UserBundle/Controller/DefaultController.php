<?php

namespace DWM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\request;
use DWM\UserBundle\Entity\User;
//Require Symfony Session Component
use Symfony\Component\HttpFoundation\Session;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        $loginUser = new User();

        //Create Session Object;
        $session = $this->getRequest()->getSession();

        //Get User From USer Table
        $em = $this -> getDoctrine()->getManager();
        $repository = $em->getRepository('DWMUserBundle:User');


        if($request->getMethod() == 'POST'){ //Get HTTP Method-> access only if POST method

            //Clear Any Existing Sessions
            $session->clear();
            $username = $request->get('username');
            $password = $request->get('password');

            //Search the database
            $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));

            if($user){//IF User Exists

                // $loginUser = new User();
                $loginUser->setUsername($username);
                $loginUser->setPassword($password);

                //Set session Variable with login User Details
                $session->set('loginUser',$loginUser);
                //  $UserName = explode(" ", $email);

                return $this->render('DWMMasterBundle:Default:index.html.twig',array('username' => $username));
            }
            else//IF User doesnt Exists
                return $this->render('DWMUserBundle:Default:login.html.twig');

        }
        else{//IF REQUEST NOT EQUAL TO POST $request->getMethod() != 'POST'

            if($session->has('loginUser')){
                $loginUser = $session->get('loginUser');
                $username = $loginUser->getUsername();
                $password = $loginUser->getPassword();

                //Search the database
                $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));
                //$UserName = explode("@", $email);
                return $this->render('DWMMasterBundle:Default:index.html.twig');

            }

        }


        return $this->render('DWMUserBundle:Default:login.html.twig');
    }
}

<?php

namespace DWM\InvoiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DWMInvoiceBundle:Default:index.html.twig');
    }
}

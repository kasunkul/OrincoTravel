<?php

namespace DWM\VoucherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\DBAL\Query\QueryBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use DWM\PassengerBundle\Entity\Passenger;
use DWM\VoucherBundle\Entity\Voucher;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\EntityManager;
class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT max(vouchno) FROM voucher ");
        $statement->execute();
        $max = $statement->fetchAll();
        $newVouchID = (int)$max[0]['max(vouchno)'] + 1;
        // var_dump($max[0]['max(vouchno)']);

        $date = date("d.m.y");
        return $this->render('DWMVoucherBundle:Default:create_voucher.html.twig',array('date' => $date,'vouchid'=>$newVouchID));
    }


    /**
     * @Route("/added")
     * @param Request $request
     * @return Response
     */
    public function persistAction(Request $request)//Persisting Passenger
    {
        $request = $this->container->get('request');

        //$projectJson = $request->request->get('$scope.passengers');

        /* Testing JSON object
           var_dump( json_decode($request->getContent()) );
        */

        $myArray = json_decode($request->getContent(), true);


        //Creating a Passenger Object
        $passenger = new Passenger();
        $passenger->setVoucherno('12');
        $passenger->setInitials($myArray[0]['_ref']);
        $passenger->setName($myArray[0]['_name']);
        $passenger->setDepart($myArray[0]['_source']);
        $passenger->setArrive($myArray[0]['_destination']);
        $passenger->setAirline($myArray[0]['_flightCode']);
        $passenger->setFlightno($myArray[0]['_flightNo']);
        $passenger->setClass($myArray[0]['_class']);
        $passenger->setStatus('ok');
        $passenger->setFare($myArray[0]['_fare']);

        $em = $this->getDoctrine()->getManager();

        $em->persist($passenger);

        $em->flush();



        //$response = array("code" => 100, "success" => true, "projectJson" => $projectJson,"params" => $request);

        return new Response($passenger->getFare());

    }



    /**
     *
     * @param Request $request
     * @return Response
     */
    public function add_voucherAction(Request $request){

        if($request->getMethod() == 'POST') { //Get HTTP Method-> access only if POST method

            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();
            $statement = $connection->prepare("SELECT max(vouchno) FROM voucher ");
            $statement->execute();
            $max = $statement->fetchAll();
            $newVouchID = (int)$max[0]['max(vouchno)'] + 1;


            $voucher = new Voucher();

            $Name = $request->get('agent');
            $Phone = $request->get('phone');
            $Email = $request->get('email');

       //     $voucher->setAgent($Name);
       //     $voucher->setContact($Phone);
       //     $voucher->setEmail($Email);
            $voucher->setVouchno($newVouchID);
            $voucher->setAgentcode($Name);
            $voucher->setDate('12/12/2015');
            $voucher->setApproved('yes');
            $voucher->setBookingref('kasun');
            $voucher->setFsubtotal('2548');
            $voucher->setGtotal('5466');
            $voucher->setLessplus('6565');
            $voucher->setNtotal('65464');
            $voucher->setOfficer('kasun');
            $voucher->setPending('yes');
            $voucher->setRemark('GOT IT');
            $voucher->setTax('555');
            $voucher->setYqyr('65454');
            $voucher->setFlag('Done');

            $em = $this->getDoctrine()->getManager();

            $em->persist($voucher);

            $em->flush();

            // return $this->render('DWMVoucherBundle:Default:view_all_vouchers.html.twig');
            return $this->redirect($this->generateUrl('dwm_voucher_view_all'));
        }

    }

    public function veiw_allAction(){

        return $this->render('DWMVoucherBundle:Default:veiw_all_vouchers.html.twig');
    }





}

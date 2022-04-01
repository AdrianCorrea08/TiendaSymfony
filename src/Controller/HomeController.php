<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/list", name="app_home_list")
     */
    public function listIndex()
    {
        // $em = $this->getDoctrine()->getManager();
        // $conexion = $em->getConnection();

        // $shoppingDetalle = $conexion->prepare(
        //     "SELECT * FROM PRODUCTO"
        // );
        // $shoppingDetalle->execute();
        

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
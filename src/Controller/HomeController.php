<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }


    /**
     * @Route("/apropos", name="about")
     */
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [

        ]);
    }

    /**
     * @Route("/services", name="services")
     */
    public function services(): Response
    {
        return $this->render('home/services.html.twig', [

        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [

        ]);
    }

    /**
     * @Route("/identification", name="identification")
     */
    public function identification(): Response
    {
        return $this->render('home/identification.html.twig', [

        ]);
    }
}

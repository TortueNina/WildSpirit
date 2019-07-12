<?php


namespace App\Controller;


use App\Entity\Association;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="index")
     * @return Response
     */

    public function index(): Response
    {
        $associations = $this-> getDoctrine()
            ->getRepository(Association::class)
            ->findAll();

        return $this->render('home/index.html.twig', [
            'associations' => $associations,
        ]);
    }
}

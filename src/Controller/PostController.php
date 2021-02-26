<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Pharma;
use App\Repository\PharmaRepository;
use Symfony\Component\Serializer\Encoder\JsonEncode;

class PostController extends AbstractController
{
     public function index(): Response
    {
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
        ]);
        
    }
    
    /**
     * @Route("/pharma/{id}", name="_pharma", methods={"GET"})
     */
    public function getAPI(Pharma $pharmacies)
    {

            print_r($pharmacies);
            //dd(get_object_vars($pharmacies));
            $response = new JsonResponse();
            $response->setData([
                'id' => $pharmacies->id
            ]
                
            );

            return $response;
        

    }
    
    
    /*
    public function showAPI()
    {

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PostController.php',
          ]);
    }*/
}

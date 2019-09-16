<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    /**
     * @Route("/DavidLafargePokémon", name="test")
     */
    public function index()
    {
        return new response('Heeeeeeeeeeeeeey, salut à tous les amis ! Cest DavidLafargePokémon et aujourd hui, on se retrouve avec MissJirachi');
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}

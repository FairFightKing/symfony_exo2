<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SerieController extends AbstractController
{
    /**
     * @Route("/serie", name="serie")
     */
    public function index()
    {
        return $this->render('serie/index.html.twig', [
            'controller_name' => 'SerieController',
        ]);
    }
    /**
     * @Route("/_table_serie", name="_table_serie")
     * */
    public function table(SerieRepository $repo){
        $series = $repo->findAll();

        return $this->render('serie/_table.html.twig',[
            'series' => $series,
            'lol' => 'mdr'
            ]);
    }
}

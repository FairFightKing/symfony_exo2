<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Category::class)->findAll();
        $category = new Category();

        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
    /*
     *
     * */

    public function tableau(){

    }
}

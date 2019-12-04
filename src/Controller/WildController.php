<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WildController extends AbstractController
{
    /**
     * @Route("/wild/show/{slug}",
     *     name="wild_show",
     *     requirements={"slug"="^[a-z0-9-]+$"}
     *     ))
     */
    public function show(string $slug=' '): Response
    {
        $slugAff = ucwords(str_replace("-", " ", $slug));

        return $this->render('wild/show.html.twig', ['slug' => $slugAff]);
    }

    /**
     * @Route("/wild", name="wild_index")
     */
    public function index() :Response
    {
        return $this->render('wild/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
}

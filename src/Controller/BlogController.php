<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{slug}", name="blog_list")
     */
    public function show(string $slug): Response
    {
        return new Response(
            '<html><body><h1>Tu numerico: '.$slug.'</h1></body></html>'
        );
    }
}
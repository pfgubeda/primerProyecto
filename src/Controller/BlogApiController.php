<?php
// src/Controller/BlogApiController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogApiController extends AbstractController
{
    /**
     * @Route("/api/posts/{id}", methods={"GET","HEAD"})
     */
    public function list(int $page): Response
    {
        // ...
    }
    
    public function show(int $id): Response
    {
        return new Response(
            '<html><body><h1>Tu id de post: '.$id.'</h1></body></html>'
        );
    }

    /**
     * @Route("/api/posts/{id}", methods={"PUT"})
     */
    public function edit(int $id): Response
    {
        // ... edit a post
    }
}
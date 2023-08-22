<?php

namespace App\Controller\Visitor\Welcome;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'visitor.welcome.index')]
    public function index(PostRepository $postRepository): Response
    {
        return $this->render('pages/visitor/welcome/index.html.twig', [
            "posts" => $postRepository->findBy(["isPublished" => true], ["publishedAt" => "DESC"], 3)
        ]);
    }
}

<?php

namespace App\Controller\Admin\User;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/admin/user/list', name: 'admin.user.index')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('pages/admin/user/index.html.twig', [
            "users" => $userRepository->findAll(),
        ]);
    }
}

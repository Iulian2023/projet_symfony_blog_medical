<?php

namespace App\Controller\Admin\Profile;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/admin/profile', name: 'admin.profile.index')]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('pages/admin/profile/index.html.twig');
    }
}

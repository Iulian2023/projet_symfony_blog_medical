<?php

namespace App\Controller\Admin\Home;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/admin/home/dashboard', name: 'admin.home.dashboard')]
    public function index(): Response
    {
        return $this->render('pages/admin/home/index.html.twig');
    }
}

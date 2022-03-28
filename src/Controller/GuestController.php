<?php
declare(strict_types=1);
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: "", name: "guest_")]
final class GuestController extends AbstractController
{
    #[Route(path: "", name: "index", options: ["expose" => true])]
    public function index(): Response
    {
        return $this->render('guest/index.html.twig');
    }
}
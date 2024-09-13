<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Repository\DoctorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class CityController extends AbstractController
{
    #[Route('/city', name: 'app_city')]
    public function index(DoctorRepository $dr): JsonResponse
    {
        return $this->json([
            "cities" => $dr->findAll()
        ]);
    }
}

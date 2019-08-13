<?php

declare(strict_types = 1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class StatusController
 * @package App\Controller
 */
class StatusController extends AbstractController
{
    /**
     * @Route("/status", methods={"GET"}, name="status")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index()
    {
        return $this->json(['hi']);
    }

    /**
     * @Route("/info", methods={"GET"}, name="info")
     * @return null
     */
    public function info()
    {
        phpinfo();

        return new Response();
    }

    /**
     * @Route("/cat", methods={"GET"}, name="cat")
     * @return null
     */
    public function cat()
    {
        return $this->render('view/cat.html.twig');
    }

}

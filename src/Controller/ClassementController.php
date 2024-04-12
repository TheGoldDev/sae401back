<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClassementController extends AbstractController
{
    #[Route('/classement', name: 'app_classement')]
    public function index(): Response
    {
        return $this->render('classement/index.html.twig', [
            'controller_name' => 'ClassementController',
        ]);
    }
    public function create(Request $request): JsonResponse
    {
        // Récupérer les données envoyées depuis le frontend
        $requestData = json_decode($request->getContent(), true);

        // Créer une nouvelle instance de l'entité Classement
        $classement = new Classement();

        // Récupérer le temps envoyé depuis le frontend
        $displayTime = $requestData['time'];

        // Convertir la chaîne de temps en objet DateTime
        $time = \DateTime::createFromFormat('H:i:s', $displayTime);

        // Définir le temps réalisé dans l'entité Classement
        $classement->setTime($time);

        // Enregistrer l'entité Classement dans la base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($classement);
        $entityManager->flush();


        // Répondre avec un message JSON pour indiquer le succès
        return new JsonResponse(['message' => 'Classement enregistré avec succès'], JsonResponse::HTTP_CREATED);

    }
}

<?php

namespace App\Controller;

use App\Entity\Signalement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("espace_societe/")
 */
class NotificationController extends AbstractController
{
    public function afficherToutNotification(Request $request): Response
    {
        $signalements = $this->getDoctrine()->getRepository(Signalement::class)->findBy(["vu" => false]);

        return $this->render('/opinion/notifications.html.twig', [
            'signalements' => $signalements
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WebsocketController extends AbstractController
{
    /**
     * @Route("/websocket_chat", name="websocket_chat")
     */
    public function index()
    {
        return $this->render('websocket/index.html.twig', []);
    }

    /**
     * @Route("/websocket_game", name="websocket_game")
     */
    public function game()
    {
        return $this->render('websocket/game.html.twig', []);
    }


}
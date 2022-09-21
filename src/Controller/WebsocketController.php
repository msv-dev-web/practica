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
        // XHPROF START
        include_once '/usr/local/lib/php/xhprof_lib/utils/xhprof_lib.php';
        include_once '/usr/local/lib/php/xhprof_lib/utils/xhprof_runs.php';
        \xhprof_enable(XHPROF_FLAGS_CPU + XHPROF_FLAGS_MEMORY);
        // XHPROF START

        $var = 100;
        for ($i=0; $i<100; $i++)
        {
            $var +=100;
        }
        $var = 100;


        // XHPROF END
            $xhprof_data = \xhprof_disable();
            $xhprof_runs = new \XHProfRuns_Default();
            $run_id = $xhprof_runs->save_run($xhprof_data, 'app');
        // XHPROF END

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
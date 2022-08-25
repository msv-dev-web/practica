<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Service\Websocket;
use Workerman\Worker;

#[AsCommand(
		name: 'web_socket',
		description: 'Add a short description for your command',
)]
class WebSocketCommand extends Command
{
	protected function execute(InputInterface $input, OutputInterface $output): int
	{

//		$ws = new Websocket();
//	    $ws->connect();


		$worker = new Worker('websocket://0.0.0.0:2346');
		$worker->count = 4;


		$worker->onConnect = function ($connection) {
			echo "New connection! \n";
		};


		$worker->onMessage = function ($connection, $data) use ($worker){
			foreach ($worker->connections as $clientConnection)
			{
				$clientConnection->send($data);
			}
		};


		$worker->onClose = function ($connection) {
			echo "Connection closed! \n";
		};




		$worker::runAll();


//	    $worker->run();
//
//		dump( 'wqewqewqewq');
//
//		die;


//	    // Create a Websocket server
//	    $ws_worker = new Worker('websocket://0.0.0.0:2346');
//
//// Emitted when new connection come
//	    $ws_worker->onConnect = function ($connection) {
//		    echo "New connection\n";
//	    };
//
//// Emitted when data received
//	    $ws_worker->onMessage = function ($connection, $data) {
//		    // Send hello $data
//		    $connection->send('Hello ' . $data);
//	    };
//
//// Emitted when connection closed
//	    $ws_worker->onClose = function ($connection) {
//		    echo "Connection closed\n";
//	    };
//
//// Run worker
//	    Worker::runAll();


		return Command::SUCCESS;
	}
}

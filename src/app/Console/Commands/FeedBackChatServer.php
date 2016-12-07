<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use App\Classes\Socket\FeedBackChatSocket;

class FeedBackChatServer extends Command
{
	protected $signature = 'feedback_chat_server:serve';

	protected $description = 'Start feedback chat server';

	protected $port = 4500;

	public function __construct() {
		parent::__construct();
	}

	public function handle() {


		$server = IoServer::factory(
			new HttpServer(
				new WsServer(
					new FeedBackChatSocket()
				)
			),
			$this->port,
			"93.125.99.73"
		);


		$this->info("FeedBackChatServer was started successfully on port $this->port");

		$server->run();
	}
}
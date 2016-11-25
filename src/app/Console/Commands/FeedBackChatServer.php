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

	public function __construct() {
		parent::__construct();
	}

	public function handle() {

		$this->info("FeedBackChatServer was started successfully");
		$server = IoServer::factory(
			new HttpServer(
				new WsServer(
					new FeedBackChatSocket()
				)
			),
			8080
		);

		$server->run();
	}
}
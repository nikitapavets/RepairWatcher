<?php

namespace App\Classes\Socket;

use App\Classes\Socket\Base\BaseSocket;
use Ratchet\ConnectionInterface;

class FeedBackChatSocket extends BaseSocket
{
	protected $_clients;

	public function __construct() {
		$this->_clients = new \SplObjectStorage;
	}

	public function onOpen(ConnectionInterface $conn) {

		$this->_clients->attach($conn);
	}

	public function onMessage(ConnectionInterface $from, $msg) {

		foreach ($this->_clients as $client) {
			if($from !== $client) {
				$client -> send($msg);
			}
		}
	}

	public function onClose(ConnectionInterface $conn) {

		$this->_clients->detach($conn);
	}

	public function onError(ConnectionInterface $conn, \Exception $e) {

		echo "An error has occurred: {$e->getMessage()}\n";
	}
}
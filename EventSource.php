<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache'); 
header('Access-Control-Allow-Origin: *'); // only for tests!!!

function sendMessage($id, $msg) {
  echo "id: " . $id . PHP_EOL . "data: " . $msg . PHP_EOL . PHP_EOL;
  ob_flush();
  flush();
}

$serverTime = time();

while(true) {
	sendMessage($serverTime, 'server time: ' . date("h:i:s", time()));
	sleep(10);
}

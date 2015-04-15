<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache'); 
header('Access-Control-Allow-Origin: *'); // only for tests!!!

function sendMsg($id, $msg) {
  echo "id: $id" . PHP_EOL;
  echo "data: $msg" . PHP_EOL;
  echo PHP_EOL;
  ob_flush();
  flush();
}

$serverTime = time();

while(true) {
	sendMsg($serverTime, 'server time: ' . date("h:i:s", time()));
	sleep(10);
}

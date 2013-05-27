<?php
$server_ip   = $_SERVER['SERVER ADDR'];//'10.82.28.131';//
$server_port = 8081;
//$beat_period = 5;
$message     = $_POST['message'];
print $message." to IP $server_ip, port $server_port\n";
if ($socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP)) {
//  while (1) {
    socket_sendto($socket, $message, strlen($message), 0, $server_ip, $server_port);
    //print "Time: " . date("%r") . "\n";
  //  sleep($beat_period);
  //}
} else {
  print("can't create socket\n");
}
?>
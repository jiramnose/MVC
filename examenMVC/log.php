<?php
function mensaje_log($mensaje) {
$date = date ("Y-m-d H:i:5');
$log message = "[{$date)] ($mensaje)\n";
$log_file = 'helpers/loggs.txt';
file_put_contents($log_file, $log_message, FILE_APPEND | LOCK EX);
?>
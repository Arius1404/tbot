<?php
$response = file_get_contents('php://input');
$msgs = file_get_contents('tmp/messages_log.txt');
$msgs .= "\r\n".$response;
file_put_contents('tmp/messages_log.txt', $msgs);
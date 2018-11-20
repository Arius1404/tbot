<?php
//750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE
$response = file_get_contents('php://input');
$msgs = file_get_contents('tmp/messages_log.txt');
$msgs .= "\r\n".$response;
file_put_contents('tmp/messages_log.txt', $msgs);

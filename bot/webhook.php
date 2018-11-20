<?php
//750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE

$response = file_get_contents('php://input');
$msgs = file_get_contents('messages_log.txt');
$msgs .= "\r\n".$response;
file_put_contents('messages_log.txt', $msgs);
$response = json_decode($response, true);
$chat_id = $response['message']['chat']['id'];
$msg = $response['message']['text'];
$username = $response['message']['chat']['username'];
if($msg='/start'){
	$msg = $username . ' добро пожаловать в бота! Нажмите /help для отоблажения доступных команд!';
}
$url = 'https://api.telegram.org/bot750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE/sendMessage?chat_id='.$chat_id.'&text='.$msg;
$responce_message = file_get_contents($url);
file_put_contents('resp_message.txt', $responce_message);
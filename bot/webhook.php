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
if($msg=='/start'){
	$msg = $username . ' добро пожаловать в бота! Нажмите /help для отоблажения доступных команд!';
	$url = 'https://api.telegram.org/bot750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE/sendMessage?chat_id='.$chat_id.'&text='.$msg;

}elseif($msg=='/help'){
	$msg = "/img - картинка котика; \n /gif - гифка котика; \n /joke - шутка про котика; \n /getHabrArticles - 10 статей из хабра";
	$url = 'https://api.telegram.org/bot750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE/sendMessage?chat_id='.$chat_id.'&text='.urlencode($msg);
}elseif($msg=='/img'){
	//AgADAgADbKoxGwHOoUu9LTCiTk18HZCYOQ8ABI_GrfFTSHGewhoBAAEC
	$url = 'https://api.telegram.org/bot750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE/sendPhoto?chat_id='.$chat_id.'&photo=AgADAgADbKoxGwHOoUu9LTCiTk18HZCYOQ8ABI_GrfFTSHGewhoBAAEC';
}elseif($msg=='/gif'){
	$url = 'https://api.telegram.org/bot750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE/sendAnimation?chat_id='.$chat_id.'&animation=CgADAgAD-QEAAgHOoUuRaQpvDYayQwI';
}elseif($msg=='/joke'){
	$msg = 'Назвал свою кошку Температурой... Теперь если зовут куда-то, а идти не хочется, то говорю: "Не могу, валяюсь с Температурой..."';
	$url = 'https://api.telegram.org/bot750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE/sendMessage?chat_id='.$chat_id.'&text='.$msg;	
}elseif($msg=='/getHabrArticles'){
	$html = file_get_contents('https://habr.com/');
	preg_match_all('/post__title"(.*)a href="(.*)"(.*)>(.*)</Uis', $html, $matches); //2 4
	$ar_request['links'] = $matches[2];
	$ar_request['titles'] = $matches[4];
	$text = '';
	for ($i=0; $i < 10 ; $i++) { 
		$text .= '->' . $matches[4][$i]. ' ' . $matches[2][$i] . "\n";
	}
	$url = 'https://api.telegram.org/bot750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE/sendMessage?chat_id='.$chat_id.'&text='.urlencode($text);
}else{
	$msg = 'Спасибо за сообщение!';
	$url = 'https://api.telegram.org/bot750970720:AAGe_QVL0D9pXwtNK2Lzx8LBZtrROdSLGQE/sendMessage?chat_id='.$chat_id.'&text='.$msg;		
}
$responce_message = file_get_contents($url);
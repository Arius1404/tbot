<?php


if(isset($_SESSION['user'])){
$ar = [];
$messages_str = file_get_contents('bot/messages_log.txt');
$ar_messages = explode("\r\n", $messages_str);
foreach ($ar_messages as $message_json) {
	$ar_mas = json_decode($message_json, true);
	$msg = $ar_mas['message']['text'];
	$username = $ar_mas['message']['chat']['username'];
	if($username==$_SESSION['user']){
		$ar[] = $msg;
	}
}

?>
<div class="container">
	<h1 class="h3 mb-3 mt-3 font-weight-normal text-primary text-center">Главная</h1>	
	<div class="row">
		<a href="https://web.tlgrm.eu/#/im?p=@Sitehelper_Bot" class="btn btn-primary btn-lg btn-block">Перейти в телеграм</a>
		<table class="table">
			<tr><th>Сообщения:</th></tr>
			<?php foreach ($ar as $message) {
				echo '<tr><td>'.$message.'</td></tr>';
			} ?>
		</table>
	</div>
</div>
<?php
}else{
  echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-primary">Авторизируйтесь, либо зарегистрируйтесь!</h1>';
}
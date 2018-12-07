<?php
if(isset($_SESSION['user'])){//если есть сессия, форма не отображается
  echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-primary">Вы уже зашли в сессию!</h1>';
  echo '<a class="btn btn-secondary text-center" href="?session_destroy=1">Выйти из сессии</a>';
  exit;
}

if(isset($_POST['register'])){//если нажата кнопка
  $file = file_get_contents('tmp/registr_users.txt');//взяли файл с зарегистрированными пользователями
  $file_strings = explode("\r\n", $file);//разбили по строкам
  $login = trim($_POST['name']);
  $pass = trim($_POST['password']);
  if(strlen($login)<5) {
    echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-danger">Длина логина должна быть не меньше 5 символов!</h1>';
    exit;
  }

    if(strlen($pass)<5) {
    echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-danger">Длина пароля должна быть не меньше 5 символов!</h1>';
    exit;
  }

  if(!preg_match("#^[aA-zZ0-9_]+$#",$login)) {
   echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-danger">Разрешаются только символы a-z 0-9 и _</h1>';
   exit;
  }
  $login = htmlentities($login);
  $pass = htmlentities($pass);

  foreach ($file_strings as $file_string) { //проходимся по каждой строке
    $data_string = explode(';',$file_string); //разделяем строку на логин и пароль
    $name = $data_string[0];
    $pass_md5 = $data_string[1];
    if($name == $login) exit('такой логин уже есть'); //$_SESSION['user'] = $name; && $pass_md5 == /*md5*/(trim($_POST['password']))
  }
  $file .= "\r\n".$login.';'.md5($pass);
  file_put_contents('tmp/registr_users.txt', $file);
  echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-success">Поздравляем с регистрацией, '.$login.'! Теперь авторизируйтесь</h1>';
  exit;
}
?>
    <div class="container">
      <div class="row justify-content-center">
    <form class="form-signin" action="" method="post">
            <h1 class="h3 mb-3 mt-3 font-weight-normal text-primary">Зарегистрируйтесь</h1>
      <h4 class="text-center text-primary">Введите в login ваш username из telegram!</h4>
      <input name="name" type="" id="inputEmail" class="form-control mt-2" placeholder="Login" required autofocus>
      <input name="password" type="password" id="inputPassword" class="form-control mt-2" placeholder="Password" required>
      <button name="register" class="btn btn-lg btn-primary btn-block mt-4" type="submit">Registration</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
  </div>
</div>

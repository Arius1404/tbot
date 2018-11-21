<?php
if(isset($_SESSION['user'])){//если есть сессия, форма не отображается
  echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-primary">Вы уже зашли в сессию!</h1>';
  echo '<a class="btn btn-secondary text-center" href="?session_destroy=1">Выйти из сессии</a>';
  exit;
}

if(isset($_POST['register'])){//если нажата кнопка
  $file = file_get_contents('tmp/registr_users.txt');//взяли файл с зарегистрированными пользователями
  $file_strings = explode("\r\n", $file);//разбили по строкам
  foreach ($file_strings as $file_string) { //проходимся по каждой строке
    $data_string = explode(';',$file_string); //разделяем строку на логин и пароль
    $name = $data_string[0]; 
    $pass_md5 = $data_string[1];
    if($name == trim($_POST['name'])) exit('такой логин уже есть'); //$_SESSION['user'] = $name; && $pass_md5 == /*md5*/(trim($_POST['password']))
  }
  $file .= "\r\n".trim($_POST['name']).';'.md5(trim($_POST['password']));
  file_put_contents('tmp/registr_users.txt', $file);
  echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-success">Поздравляем с регистрацией! Теперь авторизируйтесь</h1>';
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
<?php
if(isset($_SESSION['user'])){//если есть сессия, форма не отображается
  echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-primary">Вы уже зашли в сессию!</h1>';
  echo '<a class="btn btn-secondary text-center" href="?session_destroy=1">Выйти из сессии</a>';
  exit;
}

  if(isset($_POST['login'])){
    $file = file_get_contents('tmp/registr_users.txt');//взяли файл с зарегистрированными пользователями
    $file_strings = explode("\r\n", $file);//разбили по строкам
    foreach ($file_strings as $file_string) { //проходимся по каждой строке
    $data_string = explode(';',$file_string); //разделяем строку на логин и пароль
    $name = $data_string[0]; 
    $pass_md5 = $data_string[1];
    if($name == trim($_POST['name']) && $pass_md5 == md5(trim($_POST['password']))){
      $_SESSION['user'] = $name;
      echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-success">Поздравляем с авторизацией, '.$_SESSION['user'].'!</h1>';
      exit;
    } 
    }
    if(!isset($_SESSION['user']))  echo '<h1 class="h3 mb-3 mt-3 font-weight-normal text-danger">Неправильный логин или пароль!</h1>';
  }
?>
    <div class="container">
      <div class="row justify-content-center">
    <form class="form-signin" action="" method="post">
      <h1 class="h3 mb-3 mt-3 font-weight-normal text-primary">Введите данные</h1>
      <input name="name" type="" id="inputEmail" class="form-control mt-2" placeholder="Login" required autofocus>
      <input name="password" type="password" id="inputPassword" class="form-control mt-2" placeholder="Password" required>
      <button name="login" class="btn btn-lg btn-primary btn-block mt-4" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018</p>
    </form>
  </div>
</div>
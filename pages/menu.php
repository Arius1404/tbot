        <!-- Меню -->
    <ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link <?= ($_GET['page']==reg?'active':'') ?>" href="?page=reg">Регистрация</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= ($_GET['page']==login?'active':'') ?>" href="?page=login">Авторизация</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= ($_GET['page']==main?'active':'') ?>" href="?page=main">Главная</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= ($_GET['page']==about?'active':'') ?>" href="?page=about">О нас</a>
  </li>
</ul>
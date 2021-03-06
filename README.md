# Процесс развертывания сервера
-------------------------------
Для начала необходимо скачать, установить и настроить следующий список программ:
  - Виртуальную машину (VirtualBox, образ Ubuntu 16.04);
  - Git;
  - Vagrant

Далее потребуется создать конфигурацию для запуска сервера. Для этого воспользуемся приложением **PuPHPet**. Данный сервис позволит нам создать собственный конфигурационный архив для запуска сервера. В начале необходимо перейти по [ссылке](https://puphpet.com/) и нажать кнопку "Get started right away".

## Выбор виртуальной машины и настройка ее параметров 
---------------------------
После нажатия кнопки "Get started right away", сервис предложит выбрать, на какой виртаульной машине необходимо запустить сервис. В данном находятся 2 пункта - *Provider* и _Distro_. В пункте *Provider* нам необходимо выбрать опцию **VirtualBox**, во втором же пункте нужно выбрать дистрибутив **Ubuntu Xenial 16.04 LTS x64**. 

Далее система предлагает нам дать название создаваемой виртуальной машине и выбрать имя хоста. В пункте *Iternal Identifier* и *Hostname* пишем **bott/**. В графах *IP Address*, *Memory* и *CPUs* оставляем значения, **заданные по умолчанию**. Параметры в разделе *Forwarded ports* тоже оставляем **по умолчанию**.

Затем нам предлагается указать каталоги, где будет находиться виртуальная машина, и каталоги, которые будут являться __общими__ как для хоста, так и для виртуальной машины. В пункте *Foulder Source* указываем путь **C://bott/www** - сюда будет помещена виртуальная машина, а в пункте *Folder Target* указываем **/var/www/bott/**
- это каталог в нашей создаваемой виртуальной машине. Пункт *Shared Folder Type* оставляем по умолчанию, т.е. **Default**. *Enable Proxy* отключаем.

## Пакеты создаваемой системы
-----------------------------
В данном пункте можно увидеть, что PuPHPet по умолчанию добавил следующие компоненты:
  - bash-completion;
  - htop;
  - vim
  
Данный раздел необходимо **оставить без изменений** и перейти к следующим параметрам. Разделы **Пользователи и группы**, **Время** и **Фаервол** также пропускаем, настройка параметров в данных разделах не требуется.

## Настройка конфигурационного файла Resolv.conf
------------------------------------------------
В данном разделе PuPHPet предлагает пользователю настроить файл, который предоставляет виртуальной машине системе доступ к DNS. По умолчанию в пункт *Name Server IP Address* забиты следующие IP-адреса:
  - 8.8.8.8
  - 8.8.4.4

Данные IP-адреса пользователю необходимо **удалить**, так как их присутствие в конфигурационном архиве вызывет проблемы при настройке сети виртуальной машины. Поле *Name Server IP Address* следует оставить пустым, как и поля *Search List for Host-Name Lookup* и *Local Domain Name*. Далее пользователю необходимо оставить настройки **по умолчанию** в разделах **Cron Jobs** и **Custom Files**.

## Выбор и настройка веб-сервера для проекта
-------------------------------------
В качестве веб-сервера для проекта была выбран Apache. Пользователю необходимо дойти до раздела под названием **Nginx**. В верхней части данного раздела будет по умолчанию включена опция *Install Nginx*. Данную опцию нужно **отключить** и перейти в следующий раздел под названием **Apache** и активировать опцию *Install Apache*.

Пункт *Apache Modules* необходимо оставить **без изменений**. В графе *Server Name* указываем **bott**, в поле *Document Root* вносим следующий путь **/var/www/bott**. Далее необходимо перейти к пункту *Path* и там прописать путь **/var/www/bott**. Остальные пункты данного раздела следует оставить **без изменений**.

## Версия PHP и выбор СУБД для проекта
--------------------------------------
В разделе **Install PHP** пользователю предлагается выбрать версию языка PHP для разработки. В пункте *PHP Version* выбираем **7.2**, остальные пункты оставляем **по умолчанию**. 

Далее переходим в раздел **MySQL**. Так как именно *MySQL* была выбрана в качестве СУБД для проекта, необходимо активировать пункт *Install MySQL*. В пункте *Root Password* необходимо задать пароль и запомнить его. На этом настройка конфигурационного архива завершена и пользователю остается лишь скачать его.

## Запуск сконфигурированной виртуальной машины
-----------------------------------------------
Для того, чтобы запустить установку сконфигурированной виртуальной машины, необходимо распаковать скачанный архив в папку **C://bott**. Далее необходимо открыть консоль *Windows Power Shell* и с перейти в каталог с распакованным архивом.
```
cd C:/bott/*название архива*
```
После перехода в данный каталог необходимо запустить процесс установки
```
vagrant up
```
После завершения процесса установки все файлы, находящиеся в папке **C://bott/www**
будут доступны на виртуальной машине.

## Перенос проекта на удаленный сервер
-----------------------------------
В качестве удаленного сервера для проекта была выбрана платформа *Heroku*. Для того, чтобы перенести проект на данную платформу необходимо иметь учетную запись на *Github*, где будут находиться источники (файлы с кодом) проекта. 

Далее необходимо перейти на [сайт](https://www.heroku.com/) Heroku и создать там новый проект. Данный проект имеет название **telegram-bot-kurs**. Теперь в разделе *Deployment method* необходимо выбрать пункт **Connect to GitHub**, после чего нужно выбрать репозиторий, который необходимо связать с *Heroku* и нажать кнопку **Connect**. 

После нажатия данной кнопки выбранный репозиторий на *GitHub* будет привязан к данному проекту на *Heroku*, далее остается лишь нажать кнопку **Deploy Branch** и *Heroku* автоматически произведет сборку проекта.

## Тестирование проекта
-----------------------
Для написания и проведения тестов был использовани сервис для автоматизированного тестирования проектов [Katalon Studio](https://www.katalon.com/). Для данного проекта были написаны тесты для следующих процессов:
 - прохождение регистрации на [сайте](https://telegram-bot-kurs.herokuapp.com/) - в форму для ввода логина и пароля вводились некорректные данные (вводимый логин состоял из меньшего количества символов, чем требовалось);
 - попытка регистрации на [сайте](https://telegram-bot-kurs.herokuapp.com/) уже существующего пользователя;
 - попытка ввода **некорретного имени** пользователя/пароля в момент прохождения авторизации на [сайте](https://telegram-bot-kurs.herokuapp.com/) ;
 - переход на страницы регистрации/авторизации под учетной записью зарегистрированного/авторизированного пользователя (сайт должен выдать уведомление о том, что данный пользователь уже **зарегистрирован/авторизирован**);

*Коды* написанных тестов и *файлы, созданные системой* Katalon Studio хранятся в соответствующем [репозитории](https://github.com/Arius1404/tbot/tree/master/katalon_tests). 

Для корректного запуска и прохождения сайтом данных тестов, необходимо иметь установленный клиент [Katalon Studio](https://www.katalon.com/). Существуют два способа запуска написанных тестов:
- С помощью клиента **Katalon Studio** - необходимо открыть вкладку *File*, в ней выбрать опцию *Open project* и отметить нужные файлы;
- С помощью **командной строки** - в клиенте Katalon Studio необходимо открыть вкладку *Test suit*, и далее выбрать опцию **Build CMD**, после чего программа сгенерирует команду для запуска тестов через командную строку. Команда имеет следующий вид:
 ```
- katalon -noSplash -runMode=console -consoleLog -projectPath="....\tbot\katalon_tests\test_project\tests.prj" -retry=3 -retryFailedTestCases=false -testSuitePath="Test Suites/TestSuite" -executionProfile="default" -browserType="Chrome"
```
В параметрах данной команды необходимо указать путь, где находится проект.

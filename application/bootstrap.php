<?php
 
 
// подключаем файлы ядра
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'application/models/UserLogin.php';
require_once 'helpers/Autoloader.php';;
 
use application\core\Route;
Route::start(); // запускаем маршрутизатор

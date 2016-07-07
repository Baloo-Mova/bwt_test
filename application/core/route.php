<?php

/*
  Класс-маршрутизатор для определения запрашиваемой страницы.
  > цепляет классы контроллеров и моделей;
  > создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
 */

namespace application\core; 

class Route {

    static function start() {

        // контроллер и действие по умолчанию
        $controller_name = 'main';
        $action_name = 'index';

        
        $pathWithOutParameters = explode('?', $_SERVER['REQUEST_URI'])[0];
        
        $routes = explode('/', $pathWithOutParameters);
        
        

        // получаем имя контроллера
        if (!empty($routes[2])) {
            $controller_name = $routes[2];
        }

        // получаем имя экшена
        if (!empty($routes[3])) {
            $action_name = $routes[3];
        }

        $controller_name = 'application\controllers\controller_' . $controller_name;
        $action_name = 'action_' . $action_name;


        if (!file_exists($controller_name.'.php')) { 
            Route::ErrorPage404();
        }
        
        // создаем контроллер
        
        $controller = new $controller_name; 
        $action = $action_name;

        if (method_exists($controller, $action)) {
            // вызываем действие контроллера
            $controller->$action();
        } else {
            // здесь также разумнее было бы кинуть исключение
            Route::ErrorPage404();
        }
    }

   public static function ErrorPage404() {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:' . $host . 'test_bwt/404');
    }

}

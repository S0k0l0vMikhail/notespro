<?php

namespace Max\NotesPro\Core;
/**
 *
 */
class Router
{

  public static function Start()
  {
    $controller = 'index';
    $action = 'index';
    $routes = explode('/', $_SERVER['REQUEST_URI']);
    $params = null;
    //var_dump($routes);

    // имя класса контроллера
    if (!empty($routes[1])){
        $controller=$routes[1];
    }
    //имя метода
    if (!empty($routes[2])){
        $action=$routes[2];
    }
    //параметры
    if (!empty($routes[3])){
        $params=$routes[3];
    }
    //var_dump($controller);
    $controller= 'Max\NotesPro\Controllers\\' . ucfirst(strtolower($controller)).'Controller'; // формируем имя класса контроллера
    $action=strtolower($action).'Action'; // формируем имя метода
    //var_dump($controller);
    //var_dump($action);
    if (!class_exists($controller)){
        //Router::ErrorPage404();
        echo 'Класс не найден';
        return;
    }
    if(!method_exists($controller,$action)){
        //Router::ErrorPage404();
        echo 'Метод не найден';
        return;
    }

    $controller = new $controller();
    $controller->$action($params);
  }

  public function ErrorPage404()
  {
       $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
       header('HTTP/1.1 404 Not Found');
       header("Status: 404 Not Found");
       header('Location:'.$host.'404');
  }

  // конец класса
}

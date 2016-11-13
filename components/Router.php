<?php

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Returns request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        } else {
            return false;
        }
    }

    public function run()
    {
        // получить строку запроса
        $uri = $this->getURI();

        // проверить наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {


            // ставниваем $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {


                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                //если есть совпадение, определить какой контроллер
                // и action обрабатывают запрос
                $segments = explode('/', $internalRoute);

                $controllerName = ucfirst(array_shift($segments) . 'Controller');
                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // подключить файл класса-контроллера
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                //  создать объект, вызвать метод (т.е. action)
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result != null) {
                    break;
                }
            }
        }
    }
}
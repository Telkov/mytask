<?php

class Router
{
    protected static $routes = []; //массив с маршрутами (таблица маршрутов)
    protected static $route = []; //текущий маршрут по текущему Url

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if($url == $pattern) {
                self::$route = $route;
                return true;
            }

        }
        return false;

    }
}
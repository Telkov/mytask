<?php

namespace vendor\core\base;

abstract class Controller
{
    /**
     * @var array текущий маршрут
     */
    public $route = [];
    /**
     * @var string текущий вид
     */
    public $view = [];
    /**
     * @var string текущий шаблон
     */
    public $layout = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render();
    }
}
<?php

namespace app\controllers;

class Main extends App
{
    public function indexAction()
    {
        $name = 'www';
        $this->set(compact('name'));
    }
}
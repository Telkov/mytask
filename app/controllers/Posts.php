<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Posts extends App
{

    public function indexAction()
    {
        echo 'Posts::index';
    }

    public function testAction()
    {
        debug($this->route);
        echo 'Posts::test';
    }
}
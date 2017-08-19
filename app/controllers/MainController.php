<?php

namespace app\controllers;

use app\models;

class MainController extends App
{
    public function indexAction()
    {
        $DB = new models\DB();
        $DB->connect();

        $res = $DB->get_rows("SELECT * FROM forTest");

        $this->set(compact('res'));
    }
}
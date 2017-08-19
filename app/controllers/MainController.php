<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{
    public function indexAction()
    {
        $DB = new Main();
        $DB->connect();

        $res = $DB->get_rows("SELECT * FROM forTest");

        $this->set(compact('res'));
    }
}
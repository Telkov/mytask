<?php

/**
 * Created by PhpStorm.
 * User: Alejandro
 * Date: 17.08.2017
 * Time: 21:47
 */
class PostsNew
{
    public function indexAction()
    {
        echo 'PostsNew::indexAction';
    }

    public function testAction()
    {
        echo 'PostsNew::testAction';
    }

    public function testPageAction()
    {
        echo 'PostsNew::testPageAction';
    }

    public function before()
    {
        echo 'PostsNew::beforeAction';
    }


}
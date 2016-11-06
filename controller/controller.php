<?php

namespace App\mvc;


class controller 
{
   
    //put your code here
    public function index()
    {
   $model = new Model;
   $view = View;
   $view->render($model->getText());
    }
}

<?php

namespace app\controllers;

use app\models\AppModel;
use mvctest\base\Controller;

class BaseController extends Controller
{
    public function __construct($route){
        parent::__construct($route);
        new AppModel();
    }
    

}
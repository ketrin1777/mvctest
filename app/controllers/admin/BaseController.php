<?php

namespace app\controllers\admin;

use app\models\AppModel;
use app\models\User;
use mvctest\base\Controller;

class BaseController extends Controller
{
    public $layout = 'admin';


    public function __construct($route)
    {
        parent::__construct($route);

        $url = $_SERVER['REQUEST_URI'];

        if(User::checkAuth()){
            if (!User::isAdmin()) {
                if(isset($_SESSION['user'])) unset($_SESSION['user']);
                $_SESSION['urlBack'] = $url;
                redirect(PATH . '/user/login'); 
            }
            
        } else {
            $_SESSION['urlBack'] = $url;
            redirect(PATH . '/user/login'); 
        }
        if(isset($_SESSION['urlBack'])) unset($_SESSION['urlBack']);
        new AppModel();
    }
}

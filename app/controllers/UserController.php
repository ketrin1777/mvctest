<?php

namespace app\controllers;

use app\models\User;

class UserController extends BaseController
{

    public function actionSignup()
    {
        if (!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if (!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
            } else {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if ($user->save('user')) {
                    $_SESSION['success'] = 'Пользователь зарегистрирован';
                } else {
                    $_SESSION['error'] = 'Ошибка!';
                }
            }
            redirect();
        }
        $this->setMeta('Регистрация');
    }

    public function actionLogin()
    {
        if (!empty($_POST)) {
            $user = new User();
            if ($user->login()) {
                $_SESSION['success'] = 'Вы успешно авторизованы';
            } else {
                $_SESSION['error'] = 'Логин/пароль введены неверно';
            }
            if (isset($_SESSION['urlBack'])) {
                $backUrl = $_SESSION['urlBack'];
                unset($_SESSION['urlBack']);
                redirect($backUrl);
            }
            redirect();
        }
        $this->setMeta('Вход');
    }

    public function actionLogout()
    {
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        if (isset($_SESSION['urlBack'])) unset($_SESSION['urlBack']);
        redirect();
    }
}

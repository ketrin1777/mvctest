<?php

namespace app\controllers;

use app\models\Task;
use mvctest\App;
use mvctest\libs\Pagination;
use RedBeanPHP\R;

class MainController extends BaseController
{

    public function actionIndex()
    {


        $total = R::count('task');
        $typeSort = null;
        $sort = null;

        if (!empty($_GET)) {
            $data = $_GET;

            if ($data['type'] && $data['sort']) {

                $params = ' ORDER BY ' . $data['type'] . ' ' . $data['sort'];
                $typeSort = $data['type'];
                $sort = $data['sort'];

            }
        } else {
            $params = null;
        }

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');

        $pagination = new Pagination($page, $perpage, $total);
        $start = $pagination->getStart();



        $tasks = R::findAll('task', "$params LIMIT $start, $perpage");
        $this->setMeta('Задачи');




        $this->set(compact('tasks', 'pagination', 'typeSort', 'sort'));
    }

    public function actionCreate()
    {
        $this->setMeta('Добавить задачу');
        if (!empty($_POST)) {
            $task = new Task();

            $data = $_POST;
            $data['completed'] = 0;
            $task->load($data);


            if (!$task->validate($data)) {
                $task->getErrors();
            } else {
                $task->save('task');
                $_SESSION['success'] = 'Задача добавлена';
            }
            redirect('/');
        }
    }
}

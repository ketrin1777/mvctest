<?php

namespace app\controllers\admin;

use app\controllers\admin\BaseController;
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

            if (!empty($data['type']) && !empty($data['sort'])) {

                $params = ' ORDER BY ' . $data['type'] . ' ' . $data['sort'];
                $typeSort = $data['type'];
                $sort = $data['sort'];

            } else {
                $params = null;
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

    public function actionUpdate()
    {
        $id = $_GET['id'];
        $model = R::findOne('task', "id = ?", [$id]);

        if (!empty($_POST)) {
            $task = new Task();

            $data = $_POST;
            if (!$data['completed']) {
                $data['completed'] = 0;
            }
            

            foreach ($data as $name => $value) {
                $model->$name = $value;
            }
            

            // debug($model);
            // die;

            $task->load($data);


            if (!$task->validate($data)) {
                $task->getErrors();
            } else {
                R::store($model);
                $_SESSION['success'] = 'Задача изменена';
            }
            redirect('/admin');
        }
        $this->setMeta('Изменить задачу');
        $this->set(compact('model'));
    }

}
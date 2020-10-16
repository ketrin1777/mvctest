<?php

use mvctest\base\View;

// echo __DIR__;


?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Задачи</h2>
            <div class="d-flex justify-content-between mb-5">
                <a href="/main/create" class="btn btn-success"><i class="far fa-calendar-plus"></i> Добавить</a>
                <span>
                    <?= renderFile(__DIR__ . '/' . '_filter.php', [
                        'typeSort' => $typeSort,
                        'sort' => $sort,
                    ]) ?>
                </span>
            </div>
        </div>
        <?php if ($tasks != null) : ?>
            <?php foreach ($tasks as $key => $task) : ?>
                <div class="col-4">
                    <div class="card border border-info shadow">
                        <div class="card-header">
                            <h5><?= $task->username ?></h5>
                        </div>
                        <div class="card-body">
                            <p>email: <?= $task->email ?></p>
                            <hr>
                            <div class=""><?= $task->text ?></div>
                            <hr>

                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-start">
                            <?php if ($task->completed == 0) : ?>
                                <span class="badge badge-danger">Не выполнен</span>
                            <?php else : ?>
                                <span class="badge badge-success">Выполнен</span>
                            <?php endif; ?>
                            <?php if ($task->status == "created") : ?>
                                <h6>Статус <span class="badge badge-secondary">Создан</span></h6>
                            <?php elseif ($task->status == "modified") : ?>
                                <h6>Статус <span class="badge badge-secondary">Изменен</span></h6>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endif; ?>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <?= $pagination ?>
        </div>
    </div>
</div>
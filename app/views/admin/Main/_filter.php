<?php
// debug($sort);
// debug($typeSort);
?>
<form method="get" name="sortFilter" action="/admin" id="filter" role="form" class="d-flex align-items-center">
    <span class="mr-4">Сортировка</span>
    <div class="form-group mb-0 mr-4">

        <select name="type" class="form-control">
            <option <?= $typeSort == 'username' ? 'selected' : '' ?> value="username">username</option>
            <option <?= $typeSort == 'email' ? 'selected' : '' ?> value="email">email</option>
            <option <?= $typeSort == 'completed' ? 'selected' : '' ?> value="completed">Статус</option>
        </select>
    </div>
    <div class="form-group mb-0 mr-4">
        <select name="sort" class="form-control" class="form-control">
            <option <?= $sort == 'DESC' ? 'selected' : '' ?> value="DESC">Убыванию</option>
            <option <?= $sort == 'ASC' ? 'selected' : '' ?> value="ASC">Возростанию</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary mr-4">Применить</button>
    <a href="/" class="btn btn-secondary">Сбросить</a>
</form>
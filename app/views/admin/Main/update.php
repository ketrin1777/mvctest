<?php
?>
<div class="container">
    <div class="row">
        <div class="col-12 mt-5 mb-5">
            <h2 class="mb-4">Изменить задачу</h2>

        </div>
        <div class="col-6">
            <div class="card border border-info shadow">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form method="post" action="/admin/main/update?id=<?= $model->id ?>" id="login" role="form">
                        <div class="form-group d-none">
                            <!-- <label for="login">Login</label> -->
                            <input type="text" name="id" class="form-control" id="login" placeholder="username" readonly value=<?= $model->id ?>>
                        </div>
                        <div class="form-group">
                            <!-- <label for="login">Login</label> -->
                            <input type="text" name="username" class="form-control" id="login" placeholder="username" readonly value=<?= $model->username ?>>
                        </div>
                        <div class="form-group">
                            <!-- <label for="login">Login</label> -->
                            <input type="text" name="email" class="form-control" id="login" placeholder="email" readonly value=<?= $model->email ?>>
                        </div>
                        <div class="form-group">
                            <!-- <label for="login">Login</label> -->
                            <textarea name="text" class="form-control" id="text" placeholder="text" rows="10"><?= $model->text ?></textarea>
                        </div>

                        <div class="form-check mb-5">
                            <input name="completed" class="form-check-input" type="checkbox" value="1" id="defaultCheck1" <?= $model->completed == 1 ? 'checked' : '' ?>>
                            <label class="form-check-label" for="defaultCheck1"> выполнен</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Изменить</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
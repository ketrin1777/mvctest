<?php
?>
<div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="card border border-info shadow">
        <div class="card-header">
            <h5>Добавить задачу</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/main/create" id="login" role="form">
                <div class="form-group">
                    <!-- <label for="login">Login</label> -->
                    <input type="text" name="username" class="form-control" id="login" placeholder="username" required>
                </div>
                <div class="form-group">
                    <!-- <label for="login">Login</label> -->
                    <input type="text" name="email" class="form-control" id="login" placeholder="email" required>
                </div>
                <div class="form-group">
                    <!-- <label for="login">Login</label> -->
                    <textarea name="text" class="form-control" id="text" placeholder="text" rows="10"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
</div>
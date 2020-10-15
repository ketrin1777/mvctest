<?php

/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 01.09.2017
 * Time: 19:16
 */
?>

<div class="w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="card border border-info shadow">
        <div class="card-header">
            <h5>Вход</h5>
        </div>
        <div class="card-body">
            <form method="post" action="/user/login" id="login" role="form" data-toggle="validator">
                <div class="form-group has-feedback">
                    <!-- <label for="login">Login</label> -->
                    <input type="text" name="login" class="form-control" id="login" placeholder="Login" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
                <div class="form-group has-feedback">
                    <!-- <label for="pasword">Password</label> -->
                    <input type="password" name="password" class="form-control" id="pasword" placeholder="Password" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
                <button type="submit" class="btn btn-primary">Вход</button>
            </form>
        </div>
    </div>
</div>
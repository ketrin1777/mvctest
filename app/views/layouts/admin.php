<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/fontawesome/all.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <?= $this->getMeta(); ?>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/admin">Admin</a>
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link text-white" href="/">Главная </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/user/logout"><i class="fas fa-sign-out-alt"></i></a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error'];
                        unset($_SESSION['error']); ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success'];
                        unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?= $content; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
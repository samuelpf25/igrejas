<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                ChurchSys
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('igrejas.create')); ?>">Cadastro de Igrejas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('pessoas.create')); ?>">Cadastro de Pessoas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('membros.create')); ?>">Cadastro de Membros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <!-- Imagem no cabeçalho -->
        <img class="header-image" src="/img/back_header.jpg" alt="Header Image">
    </header>
    <div class="container">

        <?php if(session('success')): ?>
        <div id="alerta_sucesso" role="alert" class="alert alert-success alert-dismissible fade show">
            <strong><?php echo e(session('success')); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            $('#alerta_sucesso').delay(2000).fadeOut(500);
        </script>
        <?php elseif(session('error')): ?>
        <div id="alerta_erro" role="alert" class="alert alert-danger alert-dismissible">
            <strong><?php echo e(session('error')); ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <script>
            $('#alerta_erro').delay(10000).fadeOut(500);
        </script>
        <?php endif; ?>

        <?php echo $__env->yieldContent('content'); ?>

</body>

</html><?php /**PATH C:\xampp\htdocs\laravel_igreja\igreja\resources\views/layouts/main.blade.php ENDPATH**/ ?>
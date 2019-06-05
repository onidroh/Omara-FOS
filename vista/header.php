<?php require_once 'model/session.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo NOMBRE ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo URL ?>assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container espacio">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-lg">
        <a class="navbar-brand" href="<?= URL ?>">
            <img src="<?php echo URL ?>assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Mantenedor de Usuarios
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>">Principal <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>?c=login&a=detalle">Leeme</a>
                </li>
                <li class="nav-item">
                    <?php if ($session_uid) : ?>
                    <a class="nav-link active" href="<?= URL ?>?c=usuario&a=ver&id=<?= $session_uid; ?>"><?php echo $session_nombre ?></a>
                    <?php else: ?>
                    <a class="nav-link" href="<?= URL ?>?c=login">Login</a>
                    <?php endif; ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>?c=login&a=cerrar">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
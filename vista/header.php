<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cualquiera</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/mvc/assets/css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost/mvc/assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container espacio">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded-lg">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Mantenedor de Usuarios
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>usuario">Principal <span class="sr-only">(current)</span></a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" href="#">Hola</a>
                </li>-->
            </ul>
        </div>
    </nav>
</div>
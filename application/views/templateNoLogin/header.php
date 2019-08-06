<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link  href="<?= base_url('/assets/css/fuente.css')?>" rel="stylesheet">
    <link  href="<?= base_url('/assets/css/principal.css')?>" rel="stylesheet">
    <link  href="<?= base_url('/assets/css/login.css')?>" rel="stylesheet">
    <link  href="<?= base_url('/assets/css/servicios.css')?>" rel="stylesheet">
    <title>Principal</title>
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?= base_url('home'); ?>">
        <img src="<?= base_url('assets/img/logoPSFinal.png'); ?>" id="imgLogo" class="img-responsive" alt="">
    </a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item listaMenu">
                <a class="nav-link" href="#">Cursos</a>
            </li>
            <li class="nav-item listaMenu">
                <a class="nav-link" href="<?= base_url('servicios')?>">Servicios</a>
            </li>
            <li class="nav-item listaMenu">
                <a class="nav-link" href="#">YouTube</a>
            </li>
            <li class="nav-item listaMenu">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item listaMenu">
                <a class="nav-link" href="#">Contactanos</a>
            </li>
        </ul>
        <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item listaMenu">
                <a class="nav-link" href="<?= base_url('registro'); ?>">Registrarse</a>
            </li>
            <li class="nav-item listaMenu">
                <a class="nav-link" href="<?= base_url('login'); ?>">Iniciar sesion</a>
            </li>
        </ul>
    </div>
</nav>
</header>
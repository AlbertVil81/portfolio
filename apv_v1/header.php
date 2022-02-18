<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Alberto Pérez Villegas</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick-theme.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.0/slick.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <!--NavBar-->
    <div class="navbar-fixed">
        <nav>
            <div class="row black">
                <div class="col s12 m12 l10 offset-l1">
                    <div class="nav-wrapper">
                        <a href="<?php bloginfo("url"); ?>" class="brand-logo"><img src="" alt="" width="" height=""><i class="fa-solid fa-laptop-code fa-lg" style="color:white;"></i></a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <li><a class="nav-text" href="<?php bloginfo("url"); ?>"><b>Contacto</b></a></li>
                        </ul>
                    </div>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>
    </div>
    <ul id="slide-out" class="sidenav">
        <div class="space20"></div>
        <li><a class="nav-text" href="<?php bloginfo("url"); ?>">Inicio</a></li>
        <li><a class="nav-text" href="<?php bloginfo("url"); ?>/calendario/">Calendario</a></li>
        <li><a class="nav-text" href="<?php bloginfo("url"); ?>/estadisticas/">Estadisticas</a></li>
    </ul>


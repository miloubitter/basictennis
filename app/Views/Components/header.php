<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic-Tennis</title>
    <link rel="shortcut icon" href="img/basis/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
    <link href="css/animate.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="?route=index"><img class="logo" src="img/basis/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="?route=index">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tennislessen </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?route=tenniskids">Tenniskids (6-12jr)</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?route=jeugdlessen">Jeugdtennis (12-18jr)</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?route=volwassenen">Volwassenen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?route=privelessen">Privélessen</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lesinfo </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?route=lesdatazomer">Lesdata Zomer</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?route=lesdatawinter">Lesdata Winter</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?route=voorwaarden">Voorwaarden</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tarieven </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="?route=tarievenZomer">Tarieven Zomer</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?route=tarievenWinter">Tarieven Winter</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?route=bespanservice">Bespanservice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?route=shop">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?route=contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
            <?php

            if ($viewModel['errors']) {
                $errorMessage = implode('<br />',$viewModel['errors']);
                ?>

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p><?php echo $errorMessage; ?></p>
                </div>

            <?php } ?>


            <?php
            if ($viewModel['messages']) {
            $message = implode('<br />',$viewModel['messages']);
            ?>
            <br/>
            <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <?php echo $message; ?>
            </div>

            <?php } ?>
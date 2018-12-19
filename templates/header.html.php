<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>System Rezerwacji Kortów</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="res/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="res/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="res/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
</head>

<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark blue scrolling-navbar">
        <a class="navbar-brand" href="#">SYSTEM REZERWACJI KORTÓW</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?task=display">Przeglądaj rezerwacje <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?task=make">Rezerwuj kort</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Edytuj rezerwacje</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="index.php?task=login" class="nav-link"><?php if(isset($_SESSION['uid'])) echo $_SESSION['username']; else echo "Niezalogowany"; ?> <i class="fa fa-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="style.css" rel="stylesheet">
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
                <li class="nav-item active">
                    <a class="nav-link" href="indexDisplay.html.php">Przeglądaj rezerwacje <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="rezerwuj-1.html">Rezerwuj kort</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Edytuj rezerwacje</a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link">Niezalogowany <i class="fa fa-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container mt-3 pt-5">
    <h5> Rezerwacje w dniu dd.mm.yyyy</h5>
    <div class="cd-schedule loading">
        <div class="timeline">
            <ul>
                <li><span>09:00</span></li>
                <li><span>09:30</span></li>
                <li><span>10:00</span></li>
                <li><span>10:30</span></li>
                <li><span>11:00</span></li>
                <li><span>11:30</span></li>
                <li><span>12:00</span></li>
                <li><span>12:30</span></li>
                <li><span>13:00</span></li>
                <li><span>13:30</span></li>
                <li><span>14:00</span></li>
                <li><span>14:30</span></li>
                <li><span>15:00</span></li>
                <li><span>15:30</span></li>
                <li><span>16:00</span></li>
                <li><span>16:30</span></li>
                <li><span>17:00</span></li>
                <li><span>17:30</span></li>
                <li><span>18:00</span></li>
                <li><span>18:30</span></li>
                <li><span>19:00</span></li>
                <li><span>19:30</span></li>
                <li><span>20:00</span></li>
                <li><span>20:30</span></li>
                <li><span>21:00</span></li>
                <li><span>21:30</span></li>
                <li><span>22:00</span></li>
            </ul>
        </div> <!-- .timeline -->

        <div class="events">
            <ul>
                <li class="events-group">
                    <div class="top-info"><span>Kort 1</span></div>

                    <ul>
                        <li class="single-event" data-start="09:30" data-end="10:30"   data-event="event-1">
                            <a href="">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="11:00" data-end="12:30"  data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="14:00" data-end="15:00"   data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="19:00" data-end="20:00"   data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="events-group">
                    <div class="top-info"><span>Kort 2</span></div>

                    <ul>
                        <li class="single-event" data-start="10:00" data-end="11:00"   data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="11:30" data-end="13:00"   data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="13:30" data-end="15:00"  data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="15:30" data-end="16:30"   data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="events-group">
                    <div class="top-info"><span>Kort 3</span></div>

                    <ul>
                        <li class="single-event" data-start="09:00" data-end="10:00"  data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="10:30" data-end="11:30"  data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="12:00" data-end="13:30"   data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="13:30" data-end="15:00"  data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>

                        <li class="single-event" data-start="18:00" data-end="20:00"   data-event="event-1">
                            <a href="#0">
                                <em class="event-name">Rezerwacja</em>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="event-modal">
            <header class="header">
                <div class="content">
                    <span class="event-date"></span>
                    <h3 class="event-name"></h3>
                </div>

                <div class="header-bg"></div>
            </header>

            <div class="body">
                <div class="event-info"></div>
                <div class="body-bg"></div>
            </div>

            <a href="#0" class="close">Close</a>
        </div>

        <div class="cover-layer"></div>
    </div> <!-- .cd-schedule -->
</div>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="main.js"></script>
</body>

</html>

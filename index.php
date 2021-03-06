<?php
session_start();
include "controller/display.php";
include "controller/make.php";
include "controller/check.php";
include "controller/login.php";

if(!isset($_GET['task'])){
    header("Location: index.php?task=display");
}
if($_GET['task'] == 'display'){
    $ob = new DisplayController();
    if(isset($_GET['date'])){
        $ob->index($_GET['date']);
    }
    else{
        $ob->index();
    }
}
elseif ($_GET['task'] == 'make'){
    $ob = new MakeController();
    $ob->index();
}
elseif ($_GET['task'] == 'login'){
    $ob = new LoginController();
    $ob->index();
}
elseif ($_GET['task'] == 'checkCourt'){
    $ob = new CheckController();
    $ob->checkCourt($_GET['court'], $_GET['date'], $_GET['timeFrom'], $_GET['timeTo']);
}
elseif ($_GET['task'] == 'checkCoach'){
    $ob = new CheckController();
    $ob->checkCoach($_GET['date'], $_GET['timeFrom'], $_GET['timeTo'], $_GET['coach']);
}
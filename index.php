<?php
include "controller/display.php";
if($_GET['task'] == 'display'){
    $ob = new DisplayController();
    $ob->index();
}
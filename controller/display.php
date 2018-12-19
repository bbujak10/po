<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:50
 */
require_once "controller/controller.php";

class DisplayController extends Controller {
    public function index($date = NULL){
        $view = $this->loadView('display');
        $view->index($date);
    }
}
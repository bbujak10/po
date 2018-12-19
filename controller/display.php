<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:50
 */
include "controller/controller.php";

class DisplayController extends Controller {
    public function index(){
        $view = $this->loadView('display');
        $view->index();
    }
}
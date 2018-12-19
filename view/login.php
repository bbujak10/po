<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:53
 */

include "view/view.php";

class LoginView extends View{
    public function index($date = NULL){
        $this->render('loginDisplay');
    }
}
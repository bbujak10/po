<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:53
 */

include "view/view.php";

class DisplayView extends View{
    public function index(){
        $this->render('indexDisplay');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:53
 */

include "view/view.php";

class DisplayView extends View{
    public function index($date = NULL){
        $rezModel = $this->loadModel('reservations');
        if($date == NULL){
            $this->set('date', date('Y-m-d'));
            $this->set('rezData', $rezModel->getByToday());
        }
        else{
            $this->set('date', $date);
            $this->set('rezData', $rezModel->getByDate($date));
        }
        $this->render('indexDisplay');
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:50
 */
require_once "controller/controller.php";

class CheckController extends Controller {
    public function checkCourt($court, $date, $timeFrom, $timeTo){
        $resModel = $this->loadModel('reservations');
        if($resModel->detectConflict($court, $date, $timeFrom, $timeTo) == -1){
            echo -1;
        }
        else{
            echo 0;
        }
    }
    public function checkCoach($date, $timeFrom, $timeTo, $coach){
        $resModel = $this->loadModel('reservations');
        if($resModel->detectCoachConflict($date, $timeFrom, $timeTo, $coach) == -1){
            echo -1;
        }
        else{
            echo 0;
        }
    }
}
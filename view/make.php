<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:53
 */

include "view/view.php";

class MakeView extends View{
    public function index($step){
        $this->set('step', $step);
        if(isset($_POST['court'])){
            $this->set('court', $_POST['court']);
            $this->set('date', $_POST['date']);
            $this->set('timeFrom', $_POST['timeFrom']);
            $this->set('timeTo', $_POST['timeTo']);
            if(isset($_POST['coach'])){
                $this->set('coach', $_POST['coach']);
                if(isset($_POST['coachSelect'])){
                    $this->set('coachSelect', $_POST['coachSelect']);
                }
            }
            else{
                $coaModel = $this->loadModel('coaches');
                $result = $coaModel->getAll();
                $this->set('rezCoa', $result);
            }
        }
        $this->render('makeDisplay');
    }
}
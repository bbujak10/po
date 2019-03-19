<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:50
 */
require_once "controller/controller.php";

class MakeController extends Controller {
    public function index(){
        $view = $this->loadView('make');
        if(isset($_POST['court'])){     //1->2
            if(isset($_POST['coach'])){     //2->3
                if(isset($_POST['payment'])){      //3->4
                    $resModel = $this->loadModel('reservations');
                    if($resModel->detectConflict($_POST['court'], $_POST['date'], $_POST['timeFrom'], $_POST['timeTo']) == -1){
                        die("conflict detected");
                    }
                    else{
                        if($_POST['coach'] != 0){
                            if($resModel->detectCoachConflict($_POST['date'], $_POST['timeFrom'], $_POST['timeTo'], $_POST['coachSelect']) == -1){
                                die("conflict detected");
                            }
                            else{
                                $resModel->addNew($_POST['court'], $_POST['date'], $_POST['timeFrom'], $_POST['timeTo'], $_POST['coachSelect']);
                            }
                        }
                        else{
                            $resModel->addNew($_POST['court'], $_POST['date'], $_POST['timeFrom'], $_POST['timeTo']);
                        }
                    }
                    $view->index(4);
                    unset($_SESSION['price']);
                }
                else{
                    $this->loadModel('payments');
                    $payStrategy = NULL;
                    $tFrom = intval($_POST['timeFrom'][0].$_POST['timeFrom'][1]);
                    if($_POST['timeFrom'][3] == '3') $tFrom += 0.5;
                    $tTo = intval($_POST['timeTo'][0].$_POST['timeTo'][1]);
                    if($_POST['timeTo'][3] == '3') $tTo += 0.5;
                    $length = ($tTo-$tFrom)/0.5;
                    if(intval($_POST['date'][5].$_POST['date'][6]) > 9 OR intval($_POST['date'][5].$_POST['date'][6]) < 5){
                        if(intval($_POST['timeFrom'][0].$_POST['timeFrom'][1]) < 15){
                            $payStrategy = new WinterMorningPaymentStrategy();
                        }
                        else{
                            $payStrategy = new WinterAfternoonPaymentStrategy();
                        }
                    }
                    else{
                        if(intval($_POST['timeFrom'][0].$_POST['timeFrom'][1]) < 15){
                            $payStrategy = new SummerMorningPaymentStrategy();
                        }
                        else{
                            $payStrategy = new SummerAfternoonPaymentStrategy();
                        }
                    }
                    $price = $payStrategy->calcPayment($length);
                    $_SESSION['price'] = $price;
                    $view->index(3);
                }
            }
            else{
                $view->index(2);
            }
        }
        else{
            $view->index(1);
        }
    }
}
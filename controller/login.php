<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:50
 */
require_once "controller/controller.php";

class LoginController extends Controller {
    public function index(){
        $view = $this->loadView('login');
        $useModel = $this->loadModel('users');
        if(isset($_POST['login'])){
            $rez = $useModel->logMeIn($_POST['login'], $_POST['passwd']);
            if($rez != -1){
                $_SESSION['uid'] = $rez;
                $email = $_POST['login'];
                $username = strstr($email, '@', true);
                $_SESSION['username'] = $username;
            }
        }
        if(isset($_POST['logout'])){
            session_destroy();
        }
        $view->index();
    }
}
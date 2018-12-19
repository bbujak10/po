<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:23
 */

abstract class Controller{
    public function redirect($url){
        header("Location: ".$url);
    }
    public function loadView($name, $path='view/'){
        $src = $path.$name.".php";
        $name = $name."View";
        try{
            if(is_file($src)){
                require $src;
                $ob = new $name();
            }
            else{
                throw new Exception("Cannot open view ".$name);
            }
        }
        catch (Exception $e){
            print_r($e);
        }

        return $ob;
    }
    public function loadModel($name, $path = 'model/'){
        $src = $path.$name.".php";
        $name = $name."Model";
        try{
            if(is_file($src)){
                require $src;
                $ob = new $name();
            }
            else{
                throw new Exception("Cannot open model ".$name);
            }
        }
        catch (Exception $e){
            print_r($e);
        }

        return $ob;
    }
}

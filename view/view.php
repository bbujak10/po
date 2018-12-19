<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:28
 */

abstract class View{
    protected $keys;
    public function loadModel($name, $path='model/'){
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
            exit;
        }

        return $ob;
    }

    public function render($name, $path='templates/'){
        $src = $path.$name.".html.php";
        try{
            if(is_file($src)){
                require $src;
            }
            else{
                throw new Exception("Cannot open template ".$name);
            }
        }
        catch (Exception $e){
            print_r($e);
            exit;
        }
    }

    public function set($name, $value){
        $this->keys[$name] = $value;
    }
    public function get($name){
        return $this->keys[$name];
    }
}
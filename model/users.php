<?php
/**
 * Created by PhpStorm.
 * User: VXBa9
 * Date: 19.12.2018
 * Time: 13:51
 */
require_once 'model.php';

class UsersModel extends Model{
    public function logMeIn($login, $passwd){
        $rez = $this->select('ID', 'uzytkownicy', "email = '".$login."' AND haslo='".$passwd."'");
        $row = $rez->fetch_assoc();
        if($row != null){
            return $row["ID"];
        }
        else{
            return -1;
        }
    }

}
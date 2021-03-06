<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 18/12/2018
 * Time: 16:25
 */

abstract class Model{
    protected $db;

    public function __construct(){
        try{
            require "config/sql.php";

            $this->db = new mysqli($host, $username, $password, $dbname);
        }
        catch (Exception $e){
            print_r($e);
        }
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

    public function select($select = '*', $from, $where=NULL, $groupBy=NULL, $orderBy=NULL, $limit=NULL){
        $query = 'SELECT ' . $select . ' ';
        $query .= 'FROM ' . $from . ' ';
        if($where != NULL){
            $query .= 'WHERE ' . $where . ' ';
        }
        if($groupBy != NULL){
            $query .= 'WHERE ' . $groupBy . ' ';
        }
        if($orderBy != NULL){
            $query .= 'WHERE ' . $orderBy . ' ';
        }
        if($limit != NULL){
            $query .= 'WHERE ' . $limit . ' ';
        }
        $query .= ';';

        $select = mysqli_query($this->db, $query);

        return $select;
    }

    public function insert($into, $columns, $values){
        $query = 'INSERT INTO ' . $into . ' ';
        $query .= '('.$columns.') ';
        $query .= 'VALUES (' . $values . ');';
        mysqli_query($this->db, $query);
    }
}
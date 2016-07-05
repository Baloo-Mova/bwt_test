<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'application/core/db.php';

/**
 * Description of User
 *
 * @author Мова
 */
class User extends Model {

    public $id;
    public $name;
    public $sureName;
    public $password;
    public $gender;
    public $email;
    public $date;
    
    private  $db;
    
    function __construct(){
        $this->db = new DB();
    }

    public function get_data() {
        
    }
    
    public function save() { 
        if($this->db->query("Insert into user(Name,SureName,Email,Password,Gender,BirthDate) values (?s,?s,?s,md5(?s),?s,?s)",
                $this->name,$this->sureName,$this->email,$this->password,$this->gender,$this->date)){
            return true;
        } 
        return false; 
    }

    public function load($data) {

        $isSucess = true;

        if (isset($data["name"])&&!empty($data["name"])) {
            $this->name = $this->validate($data["name"]);
        } else {
            $isSucess = FALSE;
            $this->setError("Поле  <b>Имя</b> должно быть заполнено");
        }

        if (isset($data["sureName"])&&!empty($data["sureName"])) {
            $this->sureName = $this->validate($data["sureName"]);
        } else {
            $isSucess = FALSE;
            $this->setError("Поле  <b>Фамилия</b> должно быть заполнено");
        }
        
        if (isset($data["password"])&&!empty($data["password"])) {
            $this->password = $this->validate($data["password"]);
        } else {
            $isSucess = FALSE;
            $this->setError("Поле  <b>Пароль</b> должно быть заполнено");
        }

        if (isset($data["email"])&&!empty($data["email"])) {
            $this->email = $this->validate($data["email"]);
        } else {
            $isSucess = FALSE;
            $this->setError("Поле  <b>Email</b> должно быть заполнено");
        }

        if (isset($data["gender"])) {
            $this->gender = $this->validate($data["gender"]);
        }

        if (isset($data["date"])) {
            $this->date = $this->validate($data["date"]);
        }
        if ($isSucess) {
            return true;
        } else {
            return false;
        }
    }
    
    public static function isGuest() {
        if (isset($_SESSION['isLoggined'])) {
            return true;
        }
        return false;
    }

}

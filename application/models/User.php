<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace application\models;

use application\core\Model;
use application\helpers\DBConnect;
 
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
     
    public function get_data() {
        
    }
    
    public function save() { 
        $pdo = DBConnect::getInstance()->pdo; 
        $stmt = $pdo->prepare("Insert into user(Name,SureName,Email,Password,Gender,BirthDate) values (?,?,?,md5(?),?,?)"); 
        return $stmt->execute([$this->name,$this->sureName,$this->email,$this->password,$this->gender,$this->date]); 
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

}

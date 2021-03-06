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
 * Description of UserLogin
 *
 * @author Мова
 */
class UserLogin extends Model {
    
    public $email;
    public $password;
     
    
    public function load($data){
        $isSucess = true;

        if (isset($data["email"])&&!empty($data["email"])) {
            $this->email = $this->validate($data["email"]);
        } else {
            $isSucess = FALSE;
            $this->setError("Поле  <b>Email</b> должно быть заполнено");
        }

        if (isset($data["password"])&&!empty($data["password"])) {
            $this->password = $this->validate($data["password"]);
        } else {
            $isSucess = FALSE;
            $this->setError("Поле  <b>Password</b> должно быть заполнено");
        }
        
        if ($isSucess) {
            return true;
        } else {
            return false;
        }
    }
    
    public function login(){
        
        $pdo = DBConnect::getInstance()->pdo;
        $stmt = $pdo->prepare("Select Name, SureName from user where Email like ? and Password = md5(?)");
        $stmt->execute(['%'.$this->email.'%',  $this->password]); 
        $data = $stmt->fetch();
         
        if(!empty($data)){ 
            $_SESSION["User"] = $data["SureName"] ." ". $data["Name"]; 
            return true;  
        } 
        $this->password = "";
        $this->setError("Неверный логин или пароль");
        return FALSE;
    }
    
    public static function logout(){
        session_destroy();
    }
    
    public static function isGuest() { 
        if (!isset($_SESSION['User'])) {
            return true;
        }
        return false;
    }
}

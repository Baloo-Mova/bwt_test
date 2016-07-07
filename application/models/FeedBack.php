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
 * Description of FeedBack
 *
 * @author Мова
 */
class FeedBack extends Model {

    public $id;
    public $name;
    public $email;
    public $message;

    public function load($data) {  
        if (isset($data["name"]) && !empty($data["name"])) {
            $this->name = $this->validate($data["name"]);
        } else {
            $this->setError("Поле  <b>Имя</b> должно быть заполнено");
        }

        if (isset($data["email"]) && !empty($data["email"])) {
            $this->email = $this->validate($data["email"]);
        } else {
            $this->setError("Поле  <b>Email</b> должно быть заполнено");
        }

        if (isset($data["message"]) && !empty($data["message"])) {
            $this->message = $this->validate($data["message"]);
        } else {
            $this->setError("Поле  <b>Сообщение</b> должно быть заполнено");
        }

        if (isset($data["captcha"])) {
            if (($_SESSION["captcha"] != $data['captcha'])) {
                $this->setError("Не правильное поле Captcha");
            }
        }else{
            $this->setError("Поле Captcha не может быть пустым");
        }

        if (!$this->hasErrors()) {
            return true;
        } else {
            return false;
        }
    }

    public function save() {
        
        $pdo = DBConnect::getInstance()->pdo;
        
        $stmt = $pdo->prepare("Insert into feedback(Name,Email,Message) values (?,?,?)");
        return $stmt->execute([$this->name, $this->email, $this->message]);
    }

    public static function findAll() {
        $result = [];
        
        
        $sql = "Select * from feedback";
        $pdo = DBConnect::getInstance()->pdo;
        $stmt = $pdo->query($sql);
 
        foreach ($stmt->fetchAll() as $item) { 
            $model = new FeedBack();
            $model->id = $item['Id'];
            $model->email = $item['Email'];
            $model->message = $item['Message'];
            $model->name = $item['Name'];
            $result[] = $model;
        }

        return $result;
    }

}

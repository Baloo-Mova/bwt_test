<?php

class Model {

    protected $errors = []; 
    protected  $db;
    
    function __construct(){
        $this->db = new DB();
    }
    
    public function setError($errMessage){
        $this->errors[] = $errMessage;
    }

    public function getErrors(){
        return $this->errors;
    }
    
    public function hasErrors(){
        if(!empty($this->errors)){
            return true;
        }
        return FALSE;
    }
    
    public function save(){
        
    }

    // метод выборки данных
    public static function findAll() {
        // todo
    }

    //метод сопоставления полей с данными запроса
    public function load($data) {
        
    }

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

}

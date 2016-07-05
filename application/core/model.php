<?php

class Model {

    protected $errors = [];
    
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
    public function find() {
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

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace application\helpers;
/**
 * Description of DBSettings
 *
 * @author Мова
 */
class DBSettings {
    
    public $connectionstring;
    public $user;
    public $password;
    public $options;
    public $host;
    public $db;
    public $charset;
    
    public function __construct() {
        
        $this->host = "localhost";
        $this->db = "test_bwt";
        $this->charset = "UTF8";
        
        $this->user = "root";
        $this->password = "";
        
        $this->options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ];
        
        $this->connectionstring = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace application\helpers;

use application\helpers\DBSettings;
/**
 * Description of DB
 *
 * @author Мова
 */
class DBConnect {

    private static $_instance = null;
    public $pdo;

    private function __construct() {
        $db = new DBSettings();  
        $this->pdo = new \PDO($db->connectionstring, $db->user, $db->password, $db->options);
    }

    protected function __clone() {
 
    }
    
    public static function getInstance()
    {
        if (null === self::$_instance)
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

}

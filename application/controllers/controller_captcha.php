<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'application/classes/Captcha.php';
/**
 * Description of controller_captcha
 *
 * @author Мова
 */
class controller_captcha  extends Controller{
    
    public function action_index() {
         $model = new Captcha();
         $_SESSION['captcha'] = $model->getCode();
         $model->showImage();
         
    }
    
}

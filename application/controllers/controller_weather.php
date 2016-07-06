<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controller_weather
 *
 * @author Мова
 */
class controller_weather  extends Controller{
   
    
    public function action_index() {
        
        $this->view->render('weather_view.php', 'template_view.php');
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'application/models/User.php';
/**
 * Description of controller_user
 *
 * @author Мова
 */
class controller_user extends Controller {
    
        public function action_index() {
            parent::action_index();
        }
        
        public function action_registration(){
             
            $model = new User();
            if(isset($_POST['register'])){
                if($model->load($_POST)&&$model->save()){  
                    $host = 'http://' . $_SERVER['HTTP_HOST'] . '/'; 
                    header('Location:' . $host . 'test_bwt/user/registration?success=yes'); 
                }else{
                    $this->view->render('registration_view.php', 'template_view.php', ['model'=>$model]);
                    return;
                }
            }
            
            $this->view->render('registration_view.php', 'template_view.php', ['model'=>$model]);
            
        }
}

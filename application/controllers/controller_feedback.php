<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'application/models/FeedBack.php';
/**
 * Description of controller_feedback
 *
 * @author Мова
 */
class controller_feedback extends Controller {
 
   public function action_add(){
       $model = new FeedBack();
       
  
       if(isset($_POST['feedback'])){ 
            
           if($model->load($_POST)&&$model->save()){
               $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
               header('Location:' . $host . 'test_bwt/feedback/add?success=yes');
           } 
       }
       
       $this->view->render('feedbackadd_view.php', 'template_view.php',['model'=>$model]);
   }
   
   public function action_list(){
        if(UserLogin::isGuest()){
            Route::ErrorPage404();
        }
        
        $model = FeedBack::findAll(); 
        $this->view->render('feedbacklist_view.php', 'template_view.php',['feedbacklist'=>$model]);
   }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace application\controllers; 

use application\models\User;
use application\models\UserLogin; 
use application\core\Controller;

/**
 * Description of controller_user
 *
 * @author Мова
 */
class controller_user extends Controller {

    public function action_index() {
        parent::action_index();
    }

    public function action_registration() {

        if(!UserLogin::isGuest()){
            \application\core\Route::ErrorPage404();
        }
        
        $model = new User();
        if (isset($_POST['register'])) {
            if ($model->load($_POST) && $model->save()) {
                $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
                header('Location:' . $host . 'test_bwt/user/registration?success=yes');
            } 
        } 
        $this->view->render('registration_view.php', 'template_view.php', ['model' => $model]);
    }

    public function action_login() {

        $model = new UserLogin();

        if (isset($_POST['email'])) {
            if ($model->load($_POST) && $model->login()) {
                $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
                header('Location:' . $host . 'test_bwt/');
            } else {
                $this->view->render('login_view.php', 'template_view.php', ['model' => $model]);
                return;
            }
        }

        $this->view->render('login_view.php', 'template_view.php', ['model' => $model]);
    }
    
    public function action_logout(){
        UserLogin::logout();
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('Location:' . $host . 'test_bwt/');
    }

}

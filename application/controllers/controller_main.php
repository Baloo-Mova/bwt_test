<?php

namespace application\controllers;

use application\core\Controller;

class controller_main extends Controller
{

	function action_index()
	{	
		$this->view->render('main_view.php', 'template_view.php');
	}
}
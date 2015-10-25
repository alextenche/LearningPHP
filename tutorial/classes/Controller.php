<?php
// Managing the Code -- OOP: MVC -- Model

// need to include these files to make classes available
include 'Model.php';
include 'View.php';

class Controller
{
	public function showUserInfo($userID)
	{
		// setup the model
		$model = new Model($userInfo);
		// extract user info
		$userInfo = $model->getUserById($userID);
		// push user info back into the model
		$model->setUserInfo($userInfo);
		// setup the view
		$view = new View();
		// set up the body
		$view->body[] = '<h1>' . $model->showFullName() . '</h1>';
		$view->body[] .= '<hr />';
		$view->body[] .= $model->showAccountInfo();
		return $view->render();
	}		
}

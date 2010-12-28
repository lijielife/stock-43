<?php 
class AppController extends Controller {
	var $components = array('Auth', 'Session');

	function beforeFilter() {
		$this->Auth->allow('index', 'view');
		$this->Auth->authError = 'Please login to view that page. ';
		$this->Auth->loginError = 'Incorrect username/password combination.';
		$this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'about');
		$this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
	}
}
?>
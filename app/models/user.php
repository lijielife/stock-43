<?php
class User extends AppModel {
	var $name = 'User';
	var $displayField = 'name';
	var $validate = array(
		'name' =>array(
		'Please enter your name' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter your name.'
			)
		),
		'username' =>array(
			'The username must be between 5 and 15 characters.' => array(
				'rule' => array('between', 5, 15),
				'message' => 'The username must be between 5 and 15 characters.'
			),
			'That user name has already been taken.' => array(
				'rule' => 'isUnique',
				'message' => 'That user name has already been taken.'
			)
		),
		'password' => array(
			'The password must be between 5 and 15 character.' => array(
				'rule' => array('between', 5, 15),
				'messege' => 'The password must be between 5 and 15 character.'
			),
			'The password do not match' => array(
				'rule' => 'matchPasswords',
				'message' => 'The password do not match'
			)
		)		
	);
	
	var $hasMany = array(
		'Sale' => array(
			'className' => 'Sale',
			'foreignKey' => 'user_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),		
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'user_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),		
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'user_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'user_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	function matchPasswords($data){
		if($data['password'] == $this->data['User']['password_confirmation']){
			return TRUE;
		}
		$this->invalidate('password_confirmation', 'The password do not match');
		return FALSE;
	}
	
	function hashPasswords($data){
		if (isset($this->data['User']['password'])){
			$this->data['User']['password'] = Security::hash($this->data['User']['password'], NULL, TRUE);
			return $data;
		}
		return $data;
	}
	
	function beforeSave(){
		$this->hashPasswords(NULL, TRUE);
		return TRUE;
	}
}
?>
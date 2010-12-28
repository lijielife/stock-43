<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'name';
	var $belongsTo = array(
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => '',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
}
?>
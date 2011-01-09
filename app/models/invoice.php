<?php
class Invoice extends AppModel {
	var $name = 'Invoice';
	var $hasOne = array(
		'Product' => array(
			'className' => 'Product',
			'foreignKey' => 'invoice_id',
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
	);
}
?>
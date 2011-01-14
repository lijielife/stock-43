<?php
class Invoice extends AppModel {
	var $name = 'Invoice';
	var $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);	
	var $hasOne = array(
		'Sale' => array (
			'className' => 'Sale',
			'foreignKey' => 'invoice_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);	
	var $hasAndBelongsToMany = array(
        'Product' => array(
              'className' => 'Product',
              'joinTable' => 'invoices_products',
              'foreignKey' => 'invoice_id',
              'associationForeignKey' => 'product_id',
              'unique' => true,
              'conditions' => '',
              'fields' => '',
              'order' => '',
              'limit' => '',
              'offset' => '',
              'finderQuery' => '',
              'deleteQuery' => '',
              'insertQuery' => ''
            )
	);
}
?>
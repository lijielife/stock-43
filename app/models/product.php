<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'name';
	var $hasAndBelongsToMany = array(
        'Company' => array(
              'className' => 'Company',
              'joinTable' => 'companies_products',
              'foreignKey' => 'product_id',
              'associationForeignKey' => 'company_id',
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
	var $belongsTo = array(
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
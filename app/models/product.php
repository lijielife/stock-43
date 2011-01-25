<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'name';
	var $hasMany = array(
		'Sale' => array(
			'className' => 'Sale',
			'foreignKey' => 'product_id',
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
            ),
          'Invoice' => array(
              'className' => 'Invoice',
              'joinTable' => 'invoices_products',
              'foreignKey' => 'product_id',
              'associationForeignKey' => 'invoice_id',
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
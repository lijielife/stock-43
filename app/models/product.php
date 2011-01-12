<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'name';
	var $hasAndBelongsToMany = array(
        'Company' =>
            array(
                'className'                      => 'Company',
                'joinTable'                          => 'companies_products',
                'foreignKey'                       => 'product_id',
                'associationForeignKey' => 'company_id',
                'unique'                              => true,
                'conditions'                        => '',
                'fields'                                 => '',
                'order'                                 => '',
                'limit'                                   => '',
                'offset'                                 => '',
                'finderQuery'                      => '',
                'deleteQuery'                     => '',
                'insertQuery'                       => ''
            )
    );	
	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'invoice_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sale' => array(
			'className' => 'Sale',
			'foreignKey' => 'sale_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
}
?>
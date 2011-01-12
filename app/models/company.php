<?php
class Company extends AppModel {
	var $name = 'Company';
	var $displayField = 'name';
	var $hasMany = array(
		'Invoice' => array(
			'className' => 'Invoice',
			'foreignKey' => 'company_id',
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
        'Product' => array(
              'className' => 'Product',
              'joinTable' => 'companies_products',
              'foreignKey' => 'company_id',
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
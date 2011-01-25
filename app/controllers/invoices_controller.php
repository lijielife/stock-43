<?php
class InvoicesController extends AppController {

	var $name = 'Invoices';

	function index() {
		$this->Invoice->recursive = 0;
		$this->set('invoices', $this->paginate());
	}
	
	/*
	* Edited By Cem 
	* Displays All the products in an Inovice
	* $this->Invoice->find('all', array('conditions'=>array('Invoice.id'=>$id)));
	*/

	function view($id = null) {
		if($id != null) {
			$this->Invoice->recursive = 1; 
			$this->set('invoice' , $this->Invoice->findById($id));
			$this->log($this->Invoice->findById($id), LOG_DEBUG);
		} else {
			
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->log($this->data, LOG_DEBUG);
			if ($this->Invoice->saveAll($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
		$prd = $this->Invoice->Product->find('list');
		$company = $this->Invoice->Company->find('list');
		$this->set(compact('prd', 'company'));
		$this->log($this->Invoice->Product->find('list'), LOG_DEBUG);
		
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid invoice', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Invoice->save($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Invoice->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for invoice', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Invoice->delete($id)) {
			$this->Session->setFlash(__('Invoice deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Invoice was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>

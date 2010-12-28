<?php
class InvoicesController extends AppController {

	var $name = 'Invoices';

	function index() {
		$this->Invoice->recursive = 0;
		$this->set('invoices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid invoice', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('invoice', $this->Invoice->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Invoice->create();
			if ($this->Invoice->save($this->data)) {
				$this->Session->setFlash(__('The invoice has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The invoice could not be saved. Please, try again.', true));
			}
		}
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
	
	function hasan($id = null){
		$this->set('invoices', $this->Invoice->find('all'));
		$this->log($this->Invoice->find('all'), LOG_DEBUG);
	}

	function tarik($id = null){
		$this->set('invoices', $this->Invoice->find('all'));
		$this->log($this->Invoice->find('all'), LOG_DEBUG);
	}
	
	
/*	function veli($id = null){
		$sonuc = $this->Invoice->find('all', 2);
		$this->set('invoices', $sonuc);
		print_r ($sonuc); 
	}
	
	function tarik($id=null){
		$this->Invoice->id = 2;
		print_r ($this->Invoice->field('description'));
	} */
}
?>
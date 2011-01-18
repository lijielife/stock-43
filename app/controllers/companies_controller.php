<?php
class CompaniesController extends AppController {

	var $name = 'Companies';

	function index() {
		$this->Company->recursive = 0;
		$this->set('companies', $this->paginate());
	}
	
	// $this->Company->find('all', array('conditions'=>array('Company.id'=>$id)));

	function view($id = null) {
		if($id != null) {
			//Set the company data 
			$comp_dat = $this->Company->findById($id);
			$this->Company->recursive = 1; 
			$this->set('company' , $comp_dat);
			$this->set('sum' , $this->__sum($comp_dat["Invoice"]));
		} else {
			
		}
	}

	function add() {
		if (!empty($this->data)) {
			$this->Company->create();
			if ($this->Company->save($this->data)) {
				$this->Session->setFlash(__('The company has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid company', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Company->save($this->data)) {
				$this->Session->setFlash(__('The company has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Company->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for company', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Company->delete($id)) {
			$this->Session->setFlash(__('Company deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Company was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function __sum($data){
			$sm = 0;
			foreach($data as $d){
				$sm += $d['total'];
			}
			return $sm;
	}
}
?>

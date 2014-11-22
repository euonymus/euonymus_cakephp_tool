<?php
App::uses('AppController', 'Controller');
/**
 * Kidsnames Controller
 *
 * @property Kidsname $Kidsname
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class KidsnamesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Kidsname->recursive = 0;
		$this->set('kidsnames', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Kidsname->exists($id)) {
			throw new NotFoundException(__('Invalid kidsname'));
		}
		$options = array('conditions' => array('Kidsname.' . $this->Kidsname->primaryKey => $id));
		$this->set('kidsname', $this->Kidsname->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kidsname->create();
			if ($this->Kidsname->save($this->request->data)) {
				$this->Session->setFlash(__('The kidsname has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kidsname could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Kidsname->exists($id)) {
			throw new NotFoundException(__('Invalid kidsname'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Kidsname->save($this->request->data)) {
				$this->Session->setFlash(__('The kidsname has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kidsname could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Kidsname.' . $this->Kidsname->primaryKey => $id));
			$this->request->data = $this->Kidsname->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Kidsname->id = $id;
		if (!$this->Kidsname->exists()) {
			throw new NotFoundException(__('Invalid kidsname'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Kidsname->delete()) {
			$this->Session->setFlash(__('The kidsname has been deleted.'));
		} else {
			$this->Session->setFlash(__('The kidsname could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

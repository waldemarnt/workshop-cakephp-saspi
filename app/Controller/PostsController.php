<?php
App::uses('AppController', 'Controller');
App::uses('Media', 'Plugin');

/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Post->recursive = 1;
		$this->set('posts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//$this->loadModel('Media.Media');
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {

				$this->Post->Media->create();
				$this->Post->Media->set('model_id',$this->Post->getLastInsertId());
				$this->Post->Media->set('model_name','Post');
				$this->Post->Media->set('file',$this->request->data['Media']['file']);
				$this->Post->Media->save();

				$this->Session->setFlash($this->Notification->send('Post Has been Saved','topRight','success',15000));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->Notification->send('Error Post not saved!','topRight','error',15000));
			}
		}

		$this->set('categories',$this->Post->Category->find('list'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {

			if ($this->Post->save($this->request->data)) {

				$this->Post->Media->create();
				$this->Post->Media->set('model_id',$id);
				$this->Post->Media->set('model_name','Post');
				$this->Post->Media->set('file',$this->request->data['Media']['file']);
				$this->Post->Media->save();

				$this->Session->setFlash($this->Notification->send('Post Has been Saved','topRight','success',15000));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash($this->Notification->send('Error Post not saved!','topRight','error',15000));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
			$this->set('categories',$this->Post->Category->find('list'));
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash($this->Notification->send('Error Post not deleted','topRight','error',15000));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function returnAllJson(){
		$this->render = false;
		$test = $this->Post->find('all');

		$this->set(compact('test'));

		$this->set('_serialize',array('test'));
	}
}

<?php 




class CategoriesController extends AppController{



	public function index()
	{
		$this->set('categories',$this->Category->find('all'));
	}

	public function add()
	{
		if($this->request->is('post')) {
			$this->Category->create();
			if($this->Category->save($this->request->data)){
				$this->Session->setFlash('Category has been created');

				return $this->redirect(array('action'=>'index'));
			}

			$this->Session->setFlash('Error Category not saved!');
		}
	}


	public function edit($id = null)
	{
		if($this->request->is(array('post','put'))) {
			
			if($this->Category->save($this->request->data)){
				$this->Session->setFlash('Category has been modified');

				return $this->redirect(array('action'=>'index'));
			}

			$this->Session->setFlash('Error Category not saved!');
		}

		$this->request->data = $this->Category->findById($id);
	}

	public function delete($id = null)
	{
		$this->Category->id = $id;
		
		if($this->Category->delete()){
			return $this->Session->setFlash('Category has been removed');
		}
		$this->Session->setFlash('Error Category not removed');
	}

}
<?php 

App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class Media Extends MediaAppModel 
{



	public function beforeSave($options = array()){
		if(!empty($this->data[$this->alias]['file']['name'])){
			$this->data[$this->alias] = $this->prepareFileToPersist($this->data);		
		}

		return true;
	}

	/**
	 * receives a data file
	 */
	private function prepareFileToPersist($data)
	{
		$this->makeFolder();
		$fileName = $this->moveFileToFolder($data);

		return $this->prepareData($data,$fileName);
	}

	/**
	 * make a folder with 0755 permissions
	 * @return boolean
	 */
	private function makeFolder()
	{

		$dir = new Folder(IMAGES.'uploads');

		if($dir->pwd() == null){
			return new Folder(IMAGES.'uploads',true,0755);
		}

	}

	private function moveFileToFolder($data)
	{
		$tmpFile = new File($data[$this->alias]['file']['tmp_name']);
		$fileName = md5($tmpFile->name());
		$fileExt = explode(".", $data[$this->alias]['file']['name']);
		$tmpFile->copy('img'.DS.'uploads'.DS.$fileName.'.'.$fileExt[1],true);

		return $fileName.'.'.$fileExt[1];
	}

	private function prepareData($data,$fileName)
	{
		$mediaData = [];
		if($fileName) {
			$mediaData['path'] = IMAGES.'uploads';
			$mediaData['name'] = $fileName;
			$mediaData['size'] = $data[$this->alias]['file']['size'];
			$mediaData['model_id'] = $data[$this->alias]['model_id'];
			$mediaData['model_name'] = $data[$this->alias]['model_name'];
		}

		return $mediaData;
	}
}
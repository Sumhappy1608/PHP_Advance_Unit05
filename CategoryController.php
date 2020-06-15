<?php
require_once('models/Category.php');
class CategoryController
{
	var $cate_model;

	function __construct()
	{
		$this->cate_model = new Category();
	}

	public function list()
	{
		$data = array();
		$data = $this->cate_model->All();
		require_once('views/category/list.php');

	}

	public function detail()
	{
		$ID = (isset($_GET['ID']))?$_GET['ID']:0;
		$cate = $this->cate_model->find($ID);
		require_once('views/category/detail.php');
	}

	public function add()
	{
		require_once('views/category/add.php');
	}

    public function store()
	{
		$data = array();
		$data['Title'] = $_POST['title'];
		$data['Description'] = $_POST['description'];
		$status = $this->cate_model->create($data);
		
	}

	public function delete()
	{
		$ID = (isset($_GET['ID']))?$_GET['ID']:0;
		$category = $this->cate_model->delete($ID);
		
	}

	public function edit()
	{
		require_once('views/category/edit.php');
	}

	public function update()
	{
		$data = array();
		$ID = (isset($_POST['ID']))?$_POST['ID']:0;
		$data['Title'] = $_POST['Title'];
		$data['Description'] = $_POST['Description'];
		$status = $this->cate_model->update($data,$ID);
	}
	
}

?>
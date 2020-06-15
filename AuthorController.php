<?php
require_once('models/Author.php');
class AuthorController
{
	var $author_model;

	function __construct()
	{
		$this->author_model = new Author();
	}

	public function list()
	{
		$data = array();
		$data = $this->author_model->All();
		require_once('views/author/list.php');

	}

	public function detail()
	{
		$ID = (isset($_GET['ID']))?$_GET['ID']:0;
		$author = $this->author_model->find($ID);
		require_once('views/author/detail.php');
	}

	public function add()
	{
		require_once('views/author/add.php');
	}

    public function store()
	{
		$data = array();
		$data['Name'] = $_POST['Name'];
		$data['Email'] = $_POST['Email'];
		$data['Password'] = $_POST['Password'];
		$data['Status'] = $_POST['Status'];
		$status = $this->author_model->create($data);
		
	}

	public function delete()
	{
		$ID = (isset($_GET['ID']))?$_GET['ID']:0;
		$author = $this->author_model->delete($ID);
		
	}

	public function edit()
	{
		require_once('views/author/edit.php');
	}

	public function update()
	{
		$data = array();
		$ID = (isset($_POST['ID']))?$_POST['ID']:0;
		$data['Name'] = $_POST['Name'];
		$data['Email'] = $_POST['Email'];
		$data['Password'] = $_POST['Password'];
		$data['Status'] = $_POST['Status'];
		$status = $this->author_model->update($data,$ID);
	}
	
}

?>
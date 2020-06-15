<?php
require_once('Connection.php');
class Category
{
	var $connection;

	function __construct()
	{
		$conn_obj = new Connection();
		$this->connection = $conn_obj->conn;
	}

	function All()
	{
		$query = "SELECT * FROM categories";

		$data = array();

		$result = $this->connection->query($query);

		while($row = $result->fetch_assoc())
		{
			$data[] = $row;
		}

		return $data;
	}

	function find($id)
	{
		$query = "SELECT * FROM categories where ID = " .$id;

		$result = $this->connection->query($query);
		$cate = $result->fetch_assoc();

		return $cate;
	}

	function create($data)
	{
		$query = "INSERT INTO categories(title,description) VALUES ('".$data['Title']."','".$data['Description']."');";
        $status = $this->connection->query($query);

        if($status == true)
        {
            header("Location: ?mod=category&act=list"); 
        }
        else
        {
             header("Location: views/category/add.php"); 
        }
	}

	function delete($id)
	{
		$query = "DELETE FROM categories WHERE ID=".$id;
        $status = $this->connection->query($query);
        if($status == true)
        {
            header("Location: ?mod=category&act=list"); 
        }
	}

	function update($data,$id)
	{
		$query = "UPDATE categories SET Title='".$data['Title']."',Description='".$data['Description']."' WHERE ID=" .$id;
        $status = $this->connection->query($query);
        if($status == true)
        {
    	    header('Location: ?mod=category&act=list');
        }
        else
        {
        	header("Location: views/category/edit.php"); 
        }
	}
}


?>
<?php
require_once('Connection.php');
class Author
{
	var $connection;

	function __construct()
	{
		$conn_obj = new Connection();
		$this->connection = $conn_obj->conn;
	}

	function All()
	{
		$query = "SELECT * FROM authors";

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
		$query = "SELECT * FROM authors where ID = " .$id;

		$result = $this->connection->query($query);
		$cate = $result->fetch_assoc();

		return $cate;
	}

	function create($data)
	{
		$query = "INSERT INTO authors(Name,Email,Password,Status) VALUES ('".$data['Name']."','".$data['Email']."','".$data['Password']."','".$data['Status']."');";
        $status = $this->connection->query($query);

        if($status == true)
        {
            header("Location: ?mod=author&act=list"); 
        }
        else
        {
             header("Location: views/author/add.php"); 
        }
	}

	function delete($id)
	{
		$query = "DELETE FROM authors WHERE ID=".$id;
        $status = $this->connection->query($query);
        if($status == true)
        {
            header("Location: ?mod=author&act=list"); 
        }
	}

	function update($data,$id)
	{
		$query = "UPDATE authors SET Name='".$data['Name']."',Email='".$data['Email']."',Password='".$data['Password']."',Status='".$data['Status']."' WHERE ID=" .$id;
        $status = $this->connection->query($query);
        if($status == true)
        {
    	    header('Location: ?mod=author&act=list');
        }
        else
        {
        	header("Location: views/author/edit.php"); 
        }
	}
}


?>
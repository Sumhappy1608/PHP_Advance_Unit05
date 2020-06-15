<?php
$servername = "localhost";

$username = "root";  //Ten dang nhap

$password = "";   //Mat khau truy cap

$dbname = "blogs";   //Ten co so du lieu muon ket noi den

$conn = new mysqli($servername,$username,$password,$dbname);
$ID = $_GET['ID'];
$query_author="SELECT * FROM authors WHERE ID = ".$ID;
$author = $conn->query($query_author)->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Chỉnh sửa tác giả</title>
	<!--Latest compiled and minified CSS-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!--Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!--Latest compiled and minified JavaScript-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/jv/bootstrap.min.jv"></script>
</head>
<body>
	<div class="container">
	<h3 align="center">Update Author Information</h3>
	<hr>
	    <form action="?mod=author&act=update" method="POST" role="form" enctype="multipart/form-data">
	    	<input type="hidden" name="ID" value="<?= $author['ID'] ?>">
	    	<div class="form-group">
	    		<label for="">Name</label>
	    		<input type="text" class="form-control" id="" placeholder="" name="Name" value="<?= $author['Name'] ?>">
	    	</div>
	    	<div class="form-group">
	    		<label for="">Email</label>
	    	   <input type="text" class="form-control" id="" placeholder="" name="Email" value="<?= $author['Email'] ?>">
	    	</div>
	    	<div class="form-group">
	    		<label for="">Password</label>
	    	   <input type="password" class="form-control" id="" placeholder="" name="Password" value="<?= $author['Password'] ?>">
	    	</div>
	    		<div class="form-group">
	    		<label for="">Status</label>
	    	   <input type="checkbox" id="" placeholder="" name="Status" value="1"><em>(Check để hiển thị tác giả)</em>
	    	</div>
	    	<button type="submit" class="btn btn-primary">Update</button>
	    </form>
	</div>
</body>
</html>
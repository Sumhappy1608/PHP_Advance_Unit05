<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<title>Thêm mới danh mục</title>
	<!--Latest compiled and minified CSS-->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!--Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!--Latest compiled and minified JavaScript-->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/jv/bootstrap.min.jv"></script>
</head>
<body>
	<div class="container">
	<h3 align="center">Add New Category</h3>
	<hr>
	    <!--<?php if(isset($_COOKIE['msg'])){ ?>
	    <div class="alert alert-warning">
	    	<strong>Thất bại!</strong> <?= $_COOKIE['msg']?>
	    </div>
	    <?php } ?>-->
	    <form action="?mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
	    	<div class="form-group">
	    		<label for="">Name</label>
	    		<input type="text" class="form-control" id="" placeholder="" name="title">
	    	</div>
	    	<div class="form-group">
	    		<label for="">Description</label>
	    		<input type="text" class="form-control" id="" placeholder="" name="description">
	    	</div>
	    	<button type="submit" class="btn btn-primary">Create</button>
	    </form>
	</div>
</body>
</html>
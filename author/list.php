<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zent Education</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 align="center">Authors</h2>
        <a href="?mod=author&act=add" class="btn btn-primary">Add</a>
        <table class="table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row) {?>
              <tr>
                <td><?= $row['Name'] ?></td>
                <td><?= $row['Email'] ?></td>
                <td>
                    <a href="?mod=author&act=detail&ID=<?= $row['ID'] ?>" class="btn btn-success">Detail</a> 
                     <a href="?mod=author&act=edit&ID=<?= $row['ID'] ?>" class="btn btn-warning">Update</a>  
                    <a href="?mod=author&act=delete&ID=<?= $row['ID'] ?>" class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
    </div>
</body>
</html>
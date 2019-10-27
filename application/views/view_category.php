<html>
<head>
<title>Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
.form-control{
    width:350px;
    
}
.form-group{
    margin-left:200px
}
</style>
</head>
<body>
<div class="container">
<h1>Category</h1>
<button class="btn btn-primary"><a style="color:white" href="http://localhost/BooKStoreV2/index.php/Manage_category/show_addcategory">ADD category</a></button>
<button class="btn btn-primary"><a style="color:white" href="http://localhost/BooKStoreV2/index.php/Login/menu">menu</a></button>
<br>
<br>
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="col">Category ID</th>
      <th scope="col">Category name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
     
    </tr>
  </thead>
  <tbody>
<?php
foreach($data->result() as $row){
?>

<tr>
      <td><?php echo $row->ca_id?></td>
      <td><?php echo $row->ca_name?></td>
      <td><a href="http://localhost/BooKStoreV2/index.php/Manage_category/edit_category?ca_id=<?php echo $row->ca_id ?>">Edit</a></td>
      <td><a href="http://localhost/BooKStoreV2/index.php/Manage_category/deletecategory?ca_id=<?php echo $row->ca_id ?>">Delete</a></td>
    </tr>
<?php
}
?>
   
  </tbody>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
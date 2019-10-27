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
<h1>Book</h1>
<button class="btn btn-primary"><a style="color:white" href="http://localhost/BooKStoreV2/index.php/Manage_book/show_addbook">ADD BOOK</a></button>
<br>
<button class="btn btn-primary"><a style="color:white" href="http://localhost/BooKStoreV2/index.php/Login/menu">menu</a></button>
<br>
<table class="table">
  <thead class="thead-dark">
  <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Book name</th>
      <th scope="col">Author</th>
      <th scope="col">publisher</th>
      <th scope="col">category</th>
      <th scope="col">ISBN</th>
      <th scope="col">page</th>
      <th scope="col">year</th>
      <th scope="col">price</th>
      <th scope="col">amount</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach($data->result() as $row){
?>

<tr>
      <td><?php echo $row->B_ID?></td>
      <td><?php echo $row->B_name?></td>
      <td><?php echo $row->B_author?></td>
      <td><?php echo $row->B_publisher?></td>
      <td><?php echo $row->B_category_id?></td>
      <td><?php echo $row->B_ISBN?></td>
      <td><?php echo $row->B_numberpage?></td>
      <td><?php echo $row->B_year?></td>
      <td><?php echo $row->B_Price?></td>
      <td><?php echo $row->B_amounta?></td>
      <td><a href="http://localhost/BooKStoreV2/index.php/Manage_book/edit_book?B_ID=<?php echo $row->B_ID ?>">Edit</a></td>
      <td><a href="http://localhost/BooKStoreV2/index.php/Manage_book/deleteBook?B_ID=<?php echo $row->B_ID ?>">Delete</a></td>
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
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <title>Book Store</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Maven+Pro"rel="stylesheet'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="css/manageinfo2.css">
<link rel="stylesheet" href="css/card.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
  <?php 
  
  ?>
    <div class="container">
    <h1>Edit BOOKS</h1>
    <?php
$result = $data2->row();  
?>
      <form action="./updateBook" method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="exampleInput">Book name</label>
    <input name="b_name" type="text" class="form-control" id="exampleInput" value="<?php echo $result['B_name'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleInput1">Author</label>
    <input name="b_author" type="text" class="form-control" id="exampleInput1" value="<?php echo $result['B_name'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleInput2">Publisher</label>
    <input name="b_publisher" type="text" class="form-control" id="exampleInput2" value="<?php echo $result['B_name'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Category Name</label>
    
    <select name="b_category" class="form-control" id="exampleFormControlSelect1" value="<?php echo $result['B_name'] ?>">
     <?php
	foreach($data1->result() as $row){
	?>   
      <option value="<?php echo $row->ca_id; ?>"><?php echo $row->ca_name; ?></option>
    <?php 
    }  
    ?>
    </select>
    
 
  </div>

  <div class="form-group">
    <label for="exampleInput3">IBNS</label>
    <input name="b_IBNS" type="text" class="form-control" id="exampleInput3" value="<?php echo $result['B_name'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleInput4">Page</label>
    <input name="b_page" type="text" class="form-control" id="exampleInput4" value="<?php echo $result['B_name'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleInput5">Year</label>
    <input name="b_year" type="text" class="form-control" id="exampleInput5" value="<?php echo $result['B_name'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleInput6">Amount</label>
    <input name="b_amount" type="text" class="form-control" id="exampleInput6" value="<?php echo $result['B_name'] ?>">
  </div>

  <div class="form-group">
    <label for="exampleInput7">Price</label>
    <input name="b_price" type="text" class="form-control" id="exampleInput7" value="<?php echo $result['B_name'] ?>">
  </div>

 
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input name="imagebook" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br>
 </div>
  
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/2.1.1/flickity.pkgd.js'></script>

<script  src="js/manageinfo.js"></script>
<script  src="js/card.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

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

<form action="data_submitted" method="POST" enctype="multipart/form-data">
  
  <div class="form-group">
    <label for="exampleInput">Book name</label>
    <input name="b_name" type="text" class="form-control" id="exampleInput" >
  </div>

  <div class="form-group">
    <label for="exampleInput1">Author</label>
    <input name="b_author" type="text" class="form-control" id="exampleInput1" >
  </div>

  <div class="form-group">
    <label for="exampleInput2">Publisher</label>
    <input name="b_publisher" type="text" class="form-control" id="exampleInput2" >
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Category Name</label>
    
    <select name="b_category" class="form-control" id="exampleFormControlSelect1">

      <option value="13">นิยาย</option>
    
    </select>
    
 
  </div>

  <div class="form-group">
    <label for="exampleInput3">IBNS</label>
    <input name="b_IBNS" type="text" class="form-control" id="exampleInput3" >
  </div>

  <div class="form-group">
    <label for="exampleInput4">Page</label>
    <input name="b_page" type="text" class="form-control" id="exampleInput4" >
  </div>

  <div class="form-group">
    <label for="exampleInput5">Year</label>
    <input name="b_year" type="text" class="form-control" id="exampleInput5" >
  </div>

  <div class="form-group">
    <label for="exampleInput6">Amount</label>
    <input name="b_amount" type="text" class="form-control" id="exampleInput6" >
  </div>

  <div class="form-group">
    <label for="exampleInput7">Price</label>
    <input name="b_price" type="text" class="form-control" id="exampleInput7" >
  </div>

 
  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <input name="b_image" type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
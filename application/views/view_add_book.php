<html>
<head>
<title>Form</title>
<!-- <link rel="stylesheet" type="text/css" href="http://localhost/form_submit_test/css/style.css">-->
</head>

<body>

<div class="main">
<div id="content">
<h3 id='form_head'>Form Book </h3><br/>
<div id="form_input">
<?php

// Open form and set URL for submit form
echo form_open('./Welcome/data_submitted');

// Show Name Field in View Page
echo form_label('Book name :', 'b_name');
$data= array(
'name' => 'b_name',
'placeholder' => 'Please Enter book name',
'class' => 'input_box'
);
echo form_input($data);

// Show Email Field in View Page
echo br(2);
echo form_label('Author:', 'b_author');
$data= array(
'name' => 'b_author',
'placeholder' => 'Please Enter author',
'class' => 'input_box'
);
echo form_input($data);

echo br(2);
echo form_label('Publisher:', 'b_publisher');
$data= array(
'name' => 'b_publisher',
'placeholder' => 'Please Enter publisher',
'class' => 'input_box'
);
echo form_input($data);

echo br(2);
echo form_label('Category:', 'b_category');
$data= array(
'name' => 'b_category',
'placeholder' => 'Please Enter category',
'class' => 'input_box'
);
echo form_input($data);

echo br(2);
echo form_label('IBNS:', 'b_IBNS');
$data= array(
'name' => 'b_IBNS',
'placeholder' => 'Please Enter IBNS',
'class' => 'input_box'
);
echo form_input($data);

echo br(2);
echo form_label('Page:', 'b_page');
$data= array(
'name' => 'b_page',
'placeholder' => 'Please Enter page',
'class' => 'input_box'
);
echo form_input($data);

echo br(2);
echo form_label('Year:', 'b_year');
$data= array(
'name' => 'b_year',
'placeholder' => 'Please Enter year',
'class' => 'input_box'
);
echo form_input($data);

echo br(2);
echo form_label('Amount:', 'b_amount');
$data= array(
'name' => 'b_amount',
'placeholder' => 'Please Enter amount',
'class' => 'input_box'
);
echo form_input($data);

echo br(2);
echo form_label('Price:', 'b_price');
$data= array(
'name' => 'b_price',
'placeholder' => 'Please Enter price',
'class' => 'input_box'
);
echo form_input($data);


echo br(2);
echo form_label('Image:', 'b_img');
$data= array(
'name' => 'b_img',
'placeholder' => 'Please input image',
'class' => 'input_box'
);
echo form_upload($data)
?>
</div>


<div id="form_button">
<?php // Show Update Field in View Page
$data = array(
'type' => 'submit',
'value'=> 'Submit',
'class'=> 'submit'
);
echo form_submit($data); ?>
</div>


<?php echo form_close();
// Close Form
?>

</div>
</div>

</body>
</html>
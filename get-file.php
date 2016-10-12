<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container text-center" style="background-color:#222;">

</br>
</br>
<h1 style="color:#fff;">This is the TODO List that we created</h1>
</div>



</br>
</br>
<div class="container">
<div class="col-sm-12 text-center">
<?php
$f1 = fopen("record.txt","r");

while(! feof($f1))
  {
  echo fgets($f1). "<br />";
  }

fclose($f1);
?> 

</div>
</div>


<div class="container">

<div class="row">

<div class="col-sm-6 text-center">
<h3>To delete a TODO List ,click on delete button</h3>
<a class="btn btn-primary" href="delete.php">Delete List</a>

</div>



<div class="col-sm-6 text-center">
<h3>To edit a TODO List ,click on edit button</h3>
<a class="btn btn-primary" href="create.php">Edit List</a>

</div>


</div>

</div>


</body>
</html>

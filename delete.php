<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
</br>
</br>


<div class="text-center">



<?php
$temp=unlink("/opt/lampp/htdocs/javascript-test/record.txt");

if($temp==1)
{

?> 


<h2>File deleted successfully</h2>
</br>
<h3>Have fun..!!</h3>
<?php }?>

</br></br>
<br>

<a class="btn btn-danger" href="create.php">Create New List</a>

</div>
</div>

<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

 .form-group
{

width: 50%;


}

</style>



</head>
<body>

<script>

function validateform()
{
 
var nm = document.forms["myform"]["pname"].value

if(nm== null || nm== "")
{
alert("Project Name must be filled out");

return false;

}
 
var pr = document.forms["myform"]["priority"].value
if(pr=="")
{
alert("please select priority");
return false;
}


var dc = document.forms["myform"]["desc"].value
if(dc=="" || dc==null)
{
alert("please provide brief description");
return false;
}


var nam = document.forms["myform"]["name"].value
if(nam=="" || nam==null)
{
alert("please provide Report to field");
return false;
}

var sdt = document.forms["myform"]["sdate"].value
if(sdt=="")
{
alert("please provide start date");
return false;
}


var edt = document.forms["myform"]["edate"].value
if(edt=="")
{
alert("please provide end date");
return false;
}



}

</script>

<div class="container">
<h1>TODO LIST</h1>
<form name="myform" action="create-file.php" onsubmit="return validateform()" method="post">

<div class="form-group">
<lable for="project-name">Prject name :</lable>
<input type="text" class="form-control" id="pname" name="pname" placeholder="Project Name" autofocus />
</div>


<div class="form-group">
<lable for="sub">Priority:</lable>
<select name="priority" class="form-control">
<option value="">Slect priority</option>
<option value="Low">Low</option>
<option value="Medium">Medium</option>
<option value="High">High</option>

</select>
</div>



<div class="form-group">
<lable for="description">Description :</lable> 
<textarea class="form-control" name="desc" cols="80" rows="10" placeholder="project brief description" ></textarea>
</div>


<div class="form-group">
<lable for="name">Report to :</lable>
<input type="text" id="name" name="name" placeholder="Team leader name" />
</div>


<div class="form-group">
<lable for="startdate">Start Date :</lable>
<input type="date" class="form-control" id="sdate" name="sdate" placeholder="start date" />
</div>



<div class="form-group">
<lable for="enddate">End Date :</lable>
<input type="date" class="form-control" id="edate" name="edate" placeholder="End date" />
</div>



<input class="btn btn-default" type="submit" type="submit" value="Submit"/>


</form>

</body>
</div>

</html>

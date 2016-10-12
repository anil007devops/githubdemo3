<?php 

$myfile= fopen("/opt/lampp/htdocs/javascript-test/record.txt", "w") or die("Unable to open file");


$txt1=$_POST["pname"];

$txt2=$_POST["priority"];
$txt3=$_POST["desc"];
$txt4=$_POST["name"];
$txt5=$_POST["sdate"];
$txt6=$_POST["edate"];

$blank="\n\n";

fwrite($myfile, $txt1);
fwrite($myfile, $blank);
fwrite($myfile, $txt2);
fwrite($myfile, $blank);
fwrite($myfile, $txt3);
fwrite($myfile, $blank);
fwrite($myfile, $txt4);
fwrite($myfile, $blank);
fwrite($myfile, $txt5);
fwrite($myfile, $blank);
fwrite($myfile, $txt6);
fwrite($myfile, $blank);

fclose($myfile);

echo "project submitted successfully..!!";


?>

<html>
<body>

</br></br>

<h4>
<a href="index.php"> Go back to home</a>
</h4>

</br>
<h3>OR</h3>
</br>

<h4><a href="get-file.php">Check documents</a></h4>

</body>

</html>

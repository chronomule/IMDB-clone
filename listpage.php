<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SEARCH  RESULTS : MDBMS</title>
<style type="text/css">
body
{ background-color:#0f0f0f;}
</style>
<body>
<div class=box1>
<style type="text/css">
div.box1
{ position:absolute;
  left:auto;
  margin:20px;
  padding:10px;
  border:10px solid black;
  background-color:blue;
  font-color:red;
  font-family:Verdana;
}
</style>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x=$_POST['moviename'];
$result = mysql_query("SELECT * FROM Movie WHERE moviename='$x'");
while($row = mysql_fetch_array($result))
  {
 echo $row['moviename']."<br/>";
 echo "Director: ".$row['director']."<br/>";
 echo "Producer: ".$row['director']."<br/>";
  	
  
}
?>
</div>
</body>
</html>

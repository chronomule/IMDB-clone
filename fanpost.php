<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MDBMs</title>
<style type="text/css">
</style>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$x6=$_POST["email"];
$x3=$_POST["fan"];
$x4=$_POST["mail"];
mysql_select_db("Movie", $con);
$result6 = mysql_query("SELECT * FROM Cast WHERE Name='$x3'");
while($row = mysql_fetch_array($result6))
{ $d1=$row['castid'];
  
}
mysql_query("INSERT INTO Castr (cast_id, cast_name, fanmail)
VALUES
('$d1','$x3','$x4')");
echo "Succesfully splashed on".$x3."'s"."Fan Page"."<br/>";
echo "<a href=new1.php?pass=$x6>BACK</a>";
mysql_close($con);
?>

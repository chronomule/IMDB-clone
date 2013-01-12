<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD A CAST MEMBER"S INFO : MDBMS</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$p1=$_POST['name'];
$p2=$_POST['awar'];
$p3=$_POST['desig'];
$p4=$_POST['mod'];
$p5=$_POST['image'];
mysql_query("INSERT INTO Cast (Name, Awards, Designation, Moviesdone, Images)
VALUES
('$p1','$p2','$p3','$p4','$p5')");
echo "Cast profile successfully added to the MDBMS";
mysql_close($con);
?>
<br/>
<br/>
<a href="adminpage.php">GO BACK</a>
</body>
</html>

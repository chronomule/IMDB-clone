<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MDBMS</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$extract=$_GET['name'];
$x9 = mysql_query("SELECT * FROM User WHERE Firstname='$extract'"); 
while($row = mysql_fetch_array($x9))
 {
  $x10=$row['Status'];
  $x11=$row['Emailid'];
  $x15=$row['Firstname'];
  $x16=$row['Lastname'];
  $x17=$row['Password'];
}
if($x10=='Normal')

{ 
 mysql_query("UPDATE User SET Status='Warned', Emailid='$x11', Firstname='$x15', Lastname='$x16', Password='$x17' WHERE Emailid='$x11'");
 echo "WARNED";
echo "<a href=adminpage.php>BACK</a>";
}
else if($x10=='Warned')

{ 

mysql_query("DELETE FROM User WHERE Emailid='$x11'");
echo "TERMINATED"."<br/>";
echo "<a href=adminpage.php>BACK</a>";
}
mysql_close($con);
?>
</body>
</html>

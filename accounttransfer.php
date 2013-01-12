<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>USER : ACCOUNT CONTROL</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
mysql_select_db("Movie", $con);
$x5=$_POST['originid'];
$x6=$_POST['originpassword'];
$x8=$_POST['newpassword'];
$result5 = mysql_query("SELECT * FROM User WHERE Password='$x6'");
while($row = mysql_fetch_array($result5))
  {$x9=$row['Firstname'];
   $x10=$row['Lastname'];
 mysql_query("UPDATE User SET Password='$x8' WHERE Firstname='$x9' AND Lastname='$x10'");}
echo "Succesfully updated password"."<br/>"."<br/>";
echo "<a href=new1.php?pass=$x5>BACK</a>";
mysql_close($con);
?>
</body>
</html>

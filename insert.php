<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>MDBMS</title></head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$x1=$_POST["fname"];
$x2=$_POST["lname"];
$x3=$_POST["emailid"];
$x4=$_POST["password"];
mysql_select_db("Movie", $con);
$i=1;
$flag=0;
$result5 = mysql_query("SELECT * FROM `User`");
while($row = mysql_fetch_array($result5))
  {
 $mail[$i]=$row["Emailid"];
$i=$i+1;}
for($r=1;$r<$i;$r++)
{ if($mail[$r]==$x3)
  {$flag=$flag+1;}
}

if($flag==0)
{ mysql_query("INSERT INTO User (Firstname, Lastname, Emailid, Password)
VALUES
('$x1','$x2','$x3','$x4')");
echo "Successfully registered at MDBMS";}
else if($flag!=0)
{ header("Location:badreg.php");}
mysql_close($con);
?>
<br/>
<br/>
<a href="home.php">SIGN  IN</a>
</body>
</html>

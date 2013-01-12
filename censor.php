<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELETE AN OFFENSIVE REVIEW: MDBMS</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$cens=$_POST['censor'];
$em=$_POST['email'];
$result = mysql_query("SELECT * FROM Movie WHERE moviename='$cens'");
while($row = mysql_fetch_array($result))
{ $store=$row['movie_id'];}
mysql_query("DELETE FROM Critics WHERE movie_id='$store' && Emailid='$em'");
echo "Review succesfully deleted";
mysql_close($con);
?>
<br/>
<br/>
<a href="adminpage.php">GO BACK</a>
</body>
</html>

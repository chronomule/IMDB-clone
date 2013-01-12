<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELETE A MOVIE : MDBMS</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$del=$_POST['delet'];
mysql_query("DELETE FROM Movie WHERE moviename='$del'");
echo "Movie succesfully deleted";
mysql_close($con);
?>
<br/>
<br/>
<a href="adminpage.php">GO BACK</a>
</body>
</html>


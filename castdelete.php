<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELETE A CAST MEMEBER"S INFO : MDBMS</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$cdel=$_POST['castdelete'];
mysql_query("DELETE FROM Cast WHERE Name='$cdel'");
echo "Record succesfully deleted";
mysql_close($con);
?>
</body>
</html>

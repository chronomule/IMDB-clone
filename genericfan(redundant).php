<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x=$_GET['n'];
$result = mysql_query("SELECT * FROM Cast WHERE Name='$x'");
while($row = mysql_fetch_array($result))
  {
  echo $row['Name'] ." ".":"." "."Fan Page";
  
}
mysql_close($con);
?>
</title>
</head>
<body>
<div class=fp>
<style type="text/css">
div.fp
{ position:absolute;
  left:200px;
  top:200px;
}
</style>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$cname=$_GET['n'];
$resnam = mysql_query("SELECT * FROM Cast WHERE Name='$cname'");
while($row = mysql_fetch_array($resnam))
  {
  $cast=$row['Name'];
}
echo $cast."<br/>"."<br/>";
$r1 = mysql_query("SELECT * FROM Cast WHERE Name='$cname'");
while($row = mysql_fetch_array($r1))
{ $var=$row['Fanmail'];
  echo $var."<br/>"."<br/>";
}
mysql_close($con);

?>
</div>
</body>
</html>  

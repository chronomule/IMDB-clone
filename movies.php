<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MDBMs</title>
<style type="text/css">
</style>
<link href="css/indexpage.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="content"></div>
<div id="header"></div>
<div id="Login">
    
</div>
<div id="Moviegallery">
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("Movie", $con);
$result = mysql_query("SELECT * FROM Movie");
while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  }

mysql_close($con);


?>
</div>
<div id="Footer"><br/><center>Copyright@2012</div>
<div id="Logo">MDBMs</div>
</body>
</html>







 

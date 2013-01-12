<html>
<head>
<title>IMDb</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x=$_POST['moviename'];
$result = mysql_query("SELECT * FROM Movie WHERE moviename='$x'");
while($row = mysql_fetch_array($result))
  {
  echo "Movie Name:".$row['moviename'] ."<br/> Director:  " . $row['director'];
  

  }
?>
</body>
</html>


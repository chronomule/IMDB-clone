<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>USER : MDBMS</title>
</head>
<body>
<?php 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("Movie", $con);
$x30=$_POST['movie'];
$x31=$_POST['review'];
$x32=$_POST['em'];
$result5 = mysql_query("SELECT * FROM Movie WHERE moviename='$x30'");
while($row = mysql_fetch_array($result5))
  {$x90=$row['movie_id'];
 mysql_query("INSERT INTO Review (Movie_name, Movie_review, Id) VALUES ('$x30', '$x31', '$x90')"); 
}
echo "Succesfully posted review"."<br/>"."<br/>";
echo "<a href=new1.php?pass=$x32>BACK</a>";
mysql_close($con);
?>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MDBMs</title>
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
$x2=$_POST["Direction"];
$x3=$_POST["Screenplay"];
$x4=$_POST["Cinematography"];
$x5=$_POST["Editing"];
$x6=$_POST["Costume"];
$x7=$_POST["Backgroundscore"];
$x8=$_POST["moviename"];
$x11=$_POST["Emailid"];
mysql_select_db("Movie", $con);
$x9 = mysql_query("SELECT * FROM Movie WHERE moviename='$x8'"); 
while($row = mysql_fetch_array($x9))
  {
  $x10=$row['movie_id'];
  
}
mysql_query("INSERT INTO Critics (Direction, Screenplay, Cinematography, Editing, Costume, Backgroundscore, movie_id, Emailid)
VALUES
('$x2','$x3','$x4','$x5','$x6','$x7','$x10','$x11')");
echo "Succesfully rated movie"."<br/>";
echo "<a href=new1.php?pass=$x11>BACK</a>";
mysql_close($con);
?>
<br/>
<br/>
</body>
</html>


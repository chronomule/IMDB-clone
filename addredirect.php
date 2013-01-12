<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD A MOVIE : MDBMS</title>
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$z2=$_POST['gen1'];
$z3=$_POST['gen2'];
$z4=$_POST['dor'];
$z5=$_POST['col'];
$z6=$_POST['bud'];
$z7=$_POST['dur'];
$z8=$_POST['img'];
$z9=$_POST['sl'];
$z10=$_POST['award'];
$z11=$_POST['direc'];
$z12=$_POST['prod'];
$z13=$_POST['music'];
$z14=$_POST['or'];
$z15=$_POST['mn'];
$z16=$_POST['ci'];
$z17=$_POST['cinf'];
mysql_query("INSERT INTO Movie (genre_id1, genre_id2, dateofrelease, budget, collection, duration, images, storyline, awards, director, producer, music, overall_rating, moviename, cast_name, cast_character)
VALUES
('$z2','$z3','$z4','$z5','$z6','$z7','$z8','$z9','$z10','$z11','$z12','$z13','$z14','$z15','$z16','$z17')");
echo "Movie successfully added to the MDBMS";
mysql_close($con);
?>
<br/><br/>
<a href="adminpage.php">GO BACK</a>
</body>
</html>

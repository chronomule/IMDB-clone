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
$x=$_GET['name'];
$result = mysql_query("SELECT * FROM Movie WHERE moviename='$x'");
while($row = mysql_fetch_array($result))
  {
  echo $row['moviename'] ." ".":"." "."MDBMS";
  
}
mysql_close($con);
?>

</title>
<style type="text/css">
body
{ background-color:none;
}
ul
{list-style-type:none;
margin:40;
padding:10;
}
li
{display:inline;}
</style>
<script type="text/javascript">
function showResult(str)
{
if (str.length==0)
  {
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code foClick Here to Go Back:r IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","livesearch.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>


<body>
<!--IMAGE-->
<style type="text/css">
div.ex
{ 
  margin:10px;
  width:200px;
  border:5px solid gray;
  padding:0px;
}
</style>
<div class=ex>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x80=$_GET['name'];
$result80 = mysql_query("SELECT * FROM Movie WHERE moviename='$x80'");
while($row = mysql_fetch_array($result80))
  {
  $x81=$row['images'];
  
}
echo '<img src="'.$x81.'" alt="Die Hard" height="320" width="200">';
mysql_close($con);
?>

</div>
<!--MOVIE NAME AND DESCRIPTION-->
<div style="color:blue" class=pos_right>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x1=$_GET['name'];
$result1 = mysql_query("SELECT * FROM Movie WHERE moviename='$x1'");
while($row = mysql_fetch_array($result1))
  {
  echo $row['moviename']."<br/>"."<br/>".$row['storyline']."<br/>"."<br/>";
  
}
mysql_close($con);
?>
<br/><style type="text/css">
div.pos_right
{ position:absolute;
  left:225px;
  top:0px;
  margin:10px;
  border:5px solid black;
  padding:10px;
  width:600px;
  height:320px;
  font-size:15px;
  font-family:Helevetica;
  font-weight:bolder;
  background-color:none}
</style>
<!--OTHER INFO-->
<div style="color:red" class=info>
<!--PHP--><!--PASTE HERE-->
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("Movie", $con);
$x3=$_GET['name'];
$result3 = mysql_query("SELECT * FROM Movie WHERE moviename='$x3'");
while($row = mysql_fetch_array($result3))
  {
  echo "Director : ".$row['director']."<br/>";
  echo "Producer : ".$row['producer']."<br/>";
  echo "Overall Rating : ".$row['overall_rating']."<br/>";
  
  
}
mysql_close($con);
?>
</div> 
<style type="text/css">
div.info{
font-size:12px;
}
</style>
<!--END OF OTHER INFO-->
<!--RATING-->

<div style="color:red" class=rating><h7><br/>
<!--PHP FOR OVERALL RATING-->
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$x47=$_GET["name"];
mysql_select_db("Movie", $con);
$x90 = mysql_query("SELECT * FROM Movie WHERE moviename='$x47'"); 
while($row = mysql_fetch_array($x90))
  {
  $x19=$row['movie_id'];
  
}
$x20 = mysql_query("SELECT * FROM Critics WHERE movie_id='$x19'"); 
$x29=0;
$z2=0;
while($row = mysql_fetch_array($x20))
  {
  $x21=$row['Direction'];
  $x22=$row['Screenplay'];
  $x23=$row['Cinematography'];
  $x24=$row['Editing'];
  $x25=$row['Costume'];
  $x26=$row['Backgroundscore'];
  $x27=$x21+$x22+$x23+$x24+$x25+$x26; //Sum for the rating
$x28=$x27/6; //Average for the rating
$x29=$x29+$x28;
$z2=$z2+1;
}

$final=$x29/$z2;
echo "USER RATING :".round($final,2)."<br/>";
mysql_close($con);
?>
</h7><br/></div>

<style type="text/css">
div.rating
{ font-size:11px;
  font-family:Verdana;
  text-decoration:blink;
  font-style: oblique;
	font-weight: bolder;
	text-transform: capitalize;
}</style></div></div><!--END OF MOVIE NAME AND DESCRIPTION-->
<!--CAST INFO-->
<div class=cast>
<h4>CAST</h4><!--PASTE HERE-->
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x2=$_GET['name'];
$result2 = mysql_query("SELECT * FROM Movie WHERE moviename='$x2'");
while($row = mysql_fetch_array($result2))
  {
  echo $row['cast_name']."<br/>";
  
}
mysql_close($con);
?>
<br/><style type="text/css">
div.cast
{ position:absolute;
  width:285px;
  left:225px;
  top:360px;
  margin:10px;
  padding:5px ;
  border:5px solid black;
  height:250px;
  bottom:20px;
  font-color:Brown;
  font-family:Verdana;
}</style></div>
<!--LINKS AND SEArCH BAR-->
<div class=links>
<style type="text/css">
div.links
{ position:absolute;
  left:890px;
  top:5px;
  width:400px;
  height:480px;
  font-family:sans-serif;
  padding:3px;
  margin:5px;
  border:5px solid gray;
}
</style>
<!--Gallery-->
<div class=gallery1>
<h2>GALLERY</h2><br/><br/>
<style type="text/css">
div.gallery1
{ position:absolute;
  left:10px;
   top:155px;
}
</style></div>
<!--LINKS(HOME)-->
<div class=softlinks>
<style type="text/css">
div.softlinks
{ position:absolute;
  left:30px;
   top:55px;
}
</style>
<ul><br/>
<h3><li><a href="mainpage.php">Click Here to Go Back</a></li></h3>
</ul>
</div>
<!--SEARCH BAR-->
<!--PHP CODE FOR LIVE SEARCH-->
<p><b>SEARCH:</b></p>
<form>
<input type="text" size="30" onkeyup="showResult(this.value)" />
<div id="livesearch"></div>
</form>
<style type="text/css">
</style>
<br/>
</div>
<!--END OF LINKS AND SEARCH BAR-->
</div>
<div class=character>
<h4>CHARACTER</h4>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x2=$_GET['name'];
$result2 = mysql_query("SELECT * FROM Movie WHERE moviename='$x2'");
while($row = mysql_fetch_array($result2))
  {
  echo $row['cast_character']."<br/>";
  
}
mysql_close($con);
?>
<style type="text/css">
div.character
{ position:absolute;
  width:285px;
  left:550px;
  top:360px;
  margin:10px;
  padding:5px ;
  border:5px solid blue;
  height:250px;
  bottom:20px;
  font-color:blue;
  font-family:Verdana;
}</style>
</div>
<!--AWARDS-->
<div class=awards>
<style type="text/css">
div.awards
{ position:absolute;
  left:225px;
  margin:10px;
  padding:10px;
  border:5px solid black;
  top:645px;
  width:600px;
  height:400px;
}
</style>
AWARDS<br/><br/><?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x4=$_GET['name'];
$result4 = mysql_query("SELECT * FROM Movie WHERE moviename='$x4'");
while($row = mysql_fetch_array($result4))
  {
  echo $row['awards']."<br/>"."<br/>";
  
}
mysql_close($con);
?>
<br/><br/></div>

<!--BOX OFFICE-->
<div class=office>
<style type="text/css">
div.office
{position:absolute;
 left:225px;
 top:1085px;
 border:5px solid blue;
 padding:5px;
 margin:10px;
 font-color:green;
 font-family:sans serif;
 width:615px;
 font-size:20px;
 height:200px;
}
</style>
BOX  OFFICE<br/>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x6=$_GET['name'];
$result6 = mysql_query("SELECT * FROM Movie WHERE moviename='$x6'");
while($row = mysql_fetch_array($result6))
  {
  echo "<br/>"."Budget : ".$row['budget']."<br/>"."<br/>"."Collection : ".$row['collection']."<br/>"."<br/>"."Duration : ".$row['duration']."<br/>";
  
}
mysql_close($con);
?>
 </div>
<!--SUGGESTIONS-->
<div class=suggest>
<style type="text/css">
div.suggest
{ position:absolute;
  left:890px;
  top:515px;
  margin:5px;
  border:5px solid red;
  padding:5px;
  font-size:20px;
  width:400px;
  height:300px;
}
</style>
RELATED MOVIES
<br/><br/>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x30=$_GET['name'];
$result30 = mysql_query("SELECT * FROM Movie WHERE moviename='$x30'"); // Suggestions php code
while($row = mysql_fetch_array($result30))
{   $x31=$row['genre_id1'];
    $x32=$row['genre_id2'];
}
$result40 = mysql_query("SELECT * FROM Movie WHERE genre_id1='$x31'|| genre_id2='$x32'"); 
while($row = mysql_fetch_array($result40))
{ $x35=$row['moviename'];
  if($x35!=$x30) //if extracted movie matches the one passed from the form data
  echo $x35."<br/>";
}

mysql_close($con);
?>
</div>
<div class=reviews>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x8=$_GET['name'];
$x7 = mysql_query("SELECT * FROM Temp WHERE moviename='$x8'");
while($row = mysql_fetch_array($x7))
{
  $x6=$row['Image1'];
}
echo '<img src="'.$x6.'" height="50" width="30">';
mysql_close($con);
?>
<style type="text/css">
div.reviews
{ position:absolute;
  left:890px;
  top:855px;
  margin:5px;
  border:5px solid cyan;
  padding:5px;
  font-size:20px;
  width:400px;
  height:435px;
}
</style>
<br/>
<h2>Movie Reviews</h2><br/> 
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x15=$_GET['name'];
$result15 = mysql_query("SELECT * FROM Review WHERE Movie_name='$x15'");
while($row = mysql_fetch_array($result15))
  {
  $fgh=$row['Movie_review'];
  echo $fgh."<br/>"."<br/>";
}

mysql_close($con);
?>

</div>
<h3>*Images courtesy of www.wikipedia.org</h3>
<!--REVIEWS--><!--CODE REVIEW MODULE HERE-->
</body>
</html>


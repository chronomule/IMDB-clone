<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>USER : MDBMS</title>
 <style type="text/css">
.tab{
font-family: arial, verdana, san-serif;
font-size: 14px;
}
.asd
{
text-decoration: none;
font-family: arial, verdana, san-serif;
font-size: 13px;
color:#4234ff;
}

/*****remove the list style****/
#nav {
margin:0;
padding:0;
list-style:none;
}

/*****LI display inline *****/
#nav li {
float:left;
display:block;
width:100px;
background:#1E5B91;
position:relative;
z-index:500;
margin:0 1px;
}

/*****parent menu*****/
#nav li a {
display:block;
padding:8px 5px 0 5px;
font-weight:700;
height:23px;
text-decoration:none;
color:#ffffff;
text-align:center;
color:#ffeecc;
}

#nav li a:hover
{
color:#470020;
}

/* style for default selected value */ #nav a.selected {
color:#4234ff;
}
/* submenu */ #nav ul
{
position:absolute;
left:0;
display:none;
margin:0 0 0 -1px;
padding:0;
list-style:none;
}

#nav ul li
{
width:100px;
float:left;
border-top:1px solid #fff;
}

/* display block will make the link fill the whole area of LI */ #nav ul a
{
display:block;
height:15px;
padding: 8px 5px;
color:#ff7766
}

#nav ul a:hover
{
text-decoration:underline;
padding-left:15px;
}
</style>

<script type="text/javascript" src="jquery1.js">
</script>

<script type="text/javascript">
$(document).ready(function () {
$('#nav li').hover(
function () {
//show its submenu
$('ul', this).slideDown(350);
},
function () {
//hide its submenu
$('ul', this).slideUp(350);
}
);
});
</script>
</head>
<body>
<div class=welcomenote>
<style type="text/css">
div.welcomenote
{ position:absolute;
  left:900px;
  top:20px;
  font-size:25px;
  font-color:blue;
  font-type:Verdana;
}
</style>
<?php 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("Movie", $con);
$x5=$_POST['password'];
$z1=$_POST['emailAddr'];
$i=1;
$flag=0;
$result5 = mysql_query("SELECT * FROM `User`");
while($row = mysql_fetch_array($result5))
  {
 $mail[$i]=$row["Emailid"];
 $p[$i]=$row["Password"];
$i=$i+1;}
for($r=1;$r<$i;$r++)
{ if($mail[$r]==$z1)
  {$flag=$flag+1;}
}
if($flag==1)
{ for($q=1;$q<$i;$q++)
{ if($p[$q]==$x5)
  {$flag=$flag+1;}
}
}
if($flag==2)
{ echo "<h2>WELCOME</h2>"." ".$z1."<br/>";}
else if($flag!=2)
{ header("Location:badlog.php");}
$y5=$_POST['emailAddr'];
mysql_close($con);
?>
</div>
<input type=hidden name=arav value="2*#*#*2*#*#*4*#*#*2*#*#*2"><ul id='nav'>
<li> <a href='#'>Movie</a>
<ul>
<li style='background-color:#ffffff;'><a href="usermoviesearch.php">Search</a></li>
<li style='background-color:#ffffff;'><a href="watchtrailer.php">Watch a trailer</a></li>
</ul>
</li>
</ul>
<li> <a href='#'>Account</a>
<ul>
<li style='background-color:#ffffff;'><a href="mainpage.php">Logout</a></li>
<li style='background-color:#ffffff;'><a href="accountcontrol.php">Change Username/Password</a></li>
</ul>

<li> <a href='#'>Actions</a>
<ul>
<li style='background-color:#ffffff;'><a href="rate.php">Rate movie</a></li>
<li style='background-color:#ffffff;'><a href="accountreview.php">Write a review</a></li>
</ul>
<li> <a href='#'>Cast</a>
<ul>
<li style='background-color:#ffffff;'><a href="usercastsearch.php">Search</a></li>
<li style='background-color:#ffffff;'><a href="fan.php" >Write on his/her fan page</a></li>
</ul>

<div class=featuredmovie>
<style type="text/css">
div.featuredmovie
{ position:absolute;
  left:500px;
  top:200px;
  width:350px;
  height:300px;
  margin:5px;
  padding:0px;
  font-size:20px;
  border:5px solid black;
  background-color:yellow;
  overflow-y:auto;
  }
</style>
FEATURED MOVIES<br/>
<br/>
<?php 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("Movie", $con);
$resultfm = mysql_query("SELECT * FROM `Movie`");
while($row = mysql_fetch_array($resultfm))
  {
 $fetch=$row['movie_id'];
 $fe=$row['moviename'];
 echo "<a href=mlinktransfer.php?id=$fetch>$fe</a><br/>";
}
mysql_close($con);
?>
</div>
<div class=featuredcast>
<style type="text/css">
div.featuredcast
{ position:absolute;
  left:950px;
  top:200px;
  width:350px;
  height:300px;
  margin:5px;
  padding:0px;
  font-size:20px;
  border:5px solid black;
  background-color:yellow;
  overflow-y:auto;
  }
</style>
FEATURED CAST<br/>
<br/>
<?php 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("Movie", $con);
$resultfm1 = mysql_query("SELECT * FROM `Cast`");
while($row = mysql_fetch_array($resultfm1))
  {
 $fetch1=$row['castid'];
 $f=$row['Name'];
 echo "<a href=castpage.php?id=$fetch1>$f</a><br/>";
}
mysql_close($con);
?>

</div>
</body>
</html>


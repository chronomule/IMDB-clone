<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>USER : MDBMS</title>
<style type="text/css">
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
  {// code for IE6, IE5
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
<div class=ex>
<style type="text/css">
div.ex
{
  margin:00px;
  width:10px;
  height:600px;
  padding:10px;
  overflow-y:auto;
}
</style>
</div>
<div class=dt>
<style type="text/css">
div.dt
{ 
  position:absolute;
  margin:10px;
  width:160px;
  left:50px;
  top:0px;
  height:200px;
  border:5px solid black;
  padding:0px;
 overflow-y:auto;
}
</style>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x4=$_GET['name'];
$result4 = mysql_query("SELECT * FROM Cast WHERE Name='$x4'");
while($row = mysql_fetch_array($result4))
  {
  $img=$row['Images'];
  
}
echo '<img src="'.$img.'" height="200" width="160">';
mysql_close($con);
?>
</div>
<div class=rsp>
<style type="text/css">
div.rsp
{ 
  position:absolute;
  margin:10px;
  width:670px;
  left:250px;
  height:200px;
  top:0px;
  border:5px solid red;
  padding:0px;
 overflow-y:auto;
}
</style>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x5=$_GET['name'];
$result5 = mysql_query("SELECT * FROM Cast WHERE Name='$x5'");
while($row = mysql_fetch_array($result5))
  {
  $desig=$row['Designation'];
  
}
echo $x5."<br/>"."<br/>".$desig."<br/>";
mysql_close($con);
?>
</div>
<div class=pc>
<style type="text/css">
div.pc
{ 
  position:absolute;
  margin:10px;
  width:880px;
  left:45px;
  top:225px;
  height:350px;
  border:5px solid blue;
  padding:0px;
  overflow-y:auto;
}
</style>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x6=$_GET['name'];
$result6 = mysql_query("SELECT * FROM Cast WHERE Name='$x6'");
while($row = mysql_fetch_array($result6))
  {
  $mdone=$row['Moviesdone'];
  
}
echo "<h2>MOVIES DONE</h2>.<br/>";
echo $mdone."<br/>"."<br/>";
mysql_close($con);
?>
</div>
<div class=pc1>
<style type="text/css">
div.pc1
{ 
  position:absolute;
  margin:10px;
  top:600px;
  width:880px;
  left:45px;
  bottom:810px;
  height:350px;
  border:5px solid black;
  padding:0px;
 overflow-y:auto;
}
</style>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x7=$_GET['name'];
$result7 = mysql_query("SELECT * FROM Cast WHERE Name='$x7'");
while($row = mysql_fetch_array($result7))
  {
  $aw=$row['Awards'];
  
}
echo "<h2>AWARDS</h2>.<br/>";
echo $aw."<br/>"."<br/>";
mysql_close($con);
?>
</div>
<div class=ab>
<style type="text/css">
div.ab
{ 
  position:absolute;
  margin:10px;
  width:350px;
  left:950px;
  top:0px;
  height:600px;
  border:5px solid gray;
  padding:0px;
 overflow-y:auto;
}
</style>
<h3>Cast search</h3>
<br/>
<input type="text" size="30" onkeyup="showResult(this.value)" />
<div id="livesearch"></div><br/><br/><br/><br/><h2>Fan Speak</h2><br/> 
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Movie", $con);
$x15=$_GET['name'];
$result15 = mysql_query("SELECT * FROM Castr WHERE cast_name='$x15'");
while($row = mysql_fetch_array($result15))
  {
  $fgh=$row['fanmail'];
  echo $fgh."<br/>"."<br/>";
}

mysql_close($con);
?>
</div>

</div>


</body>
</html>

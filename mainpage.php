<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MDBMS</title>
<style type="text/css">
ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}
li
{
display:inline;
}
body{background-color:#b0c4de;}
img
{
opacity:0.5;
filter:alpha(opacity=50); 
float:right;
}
img:hover
{
opacity:1.0;
filter:alpha(opacity=100); 
}
a
{
width:80px;
height:50px;
background-color:#dddddd;
text-align:center;
}
a:hover
{text-decoration:underline;}
a:active
{text-decoration:underline;
}
</style>
<link href="css/indexpage.css" rel="stylesheet" type="text/css" />
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
<div class=querybar>      <!--Querybar specs-->
<style type="text/css">
div.querybar
{ position:absolute;
  align:center;
  left:500px;
  top:350px;
  }
</style>
<h3>Type required movie/cast name:</h3>
<br/>
<input type="text" size="30" onkeyup="showResult(this.value)" />
<div id="livesearch"></div></div>
<div class=image>                   <!--Image specs-->
<style type="text/css">
div.image
{ position:absolute;
  left:600px;
  top:190px;
}

</style>
<img src="mainpg.jpeg" alt="MDBMS" width="160"/>
</div>
<div>        <!--Links specs-->
<ul>
<li><a href="home.php">Sign In</a></li>
<li><a href="register.php">Sign Up</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="about.php">About</a></li>
</ul>
</div>
<div class=font>    <!--Main text-->
<style type="text/css">
div.font
{
position:absolute;
font-color:red;
width:400px;
height:100px;
left:450px;
top:50px;
text-decoration:blink;
}
</style>
MOVIE DATABASE MANAGEMENT SYSTEM
</div>
</body>
</html>


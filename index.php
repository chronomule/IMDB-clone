<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>USER : MDBMS</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link href="css1/default.css" rel="stylesheet" type="text/css">

<!-- dd menu -->
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>

</head>
<body>

<?php 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
if ($con)
  {
  echo "Connect"."<br/>";
  }
mysql_select_db("Movie", $con);
$x5=$_POST['password'];
$result5 = mysql_query("SELECT * FROM `User` WHERE Password='$x5'");
while($row = mysql_fetch_array($result5))
  {
 if($_POST['password']==$row['Password'])
 {echo "WELCOME  "." "." "." ".$_POST['emailid'];}
}

mysql_close($con);
?>

<p>This menu can be located anywhere on a page:</p>

<ul id="sddm">
	<li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Home</a>
		<div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">HTML DropDown</a>
		<a href="#">DHTML DropDown menu</a>
		<a href="#">JavaScript DropDown</a>
		<a href="#">DropDown Menu</a>
		<a href="#">CSS DropDown</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Download</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">ASP Dropdown</a>
		<a href="#">Pulldown menu</a>
		<a href="#">AJAX dropdown</a>
		<a href="#">DIV dropdown</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Order</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">Visa Credit Card</a>
		<a href="#">Paypal</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">Help</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">Download Help File</a>
		<a href="#">Read online</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Contact</a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="#">E-mail</a>
		<a href="#">Submit Request Form</a>
		<a href="#">Call Center</a>
		</div>
	</li>
</ul>
<div style="clear:both"></div>

<div style="clear:both"></div>
<p>If you are looking for advanced script, see the <a href="http://javascript-array.com/scripts/multi_level_drop_down_menu/?sddm">Multi-Level Drop-Down Menu</a> based on simple treelike unordered list.
<p>If you want to use this script on your page, please place link to http://javascript-array.com at one of your pages.
<p>&copy; Copyright 2006-2007 <a href="http://javascript-array.com/">javascript-array.com</p>

</body>
</html>

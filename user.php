<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>USER : MDBMS</title>
<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/default.css">

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
<!--MAIN BOX-->
<div class=mainbox>
<style type="text/css">
div.mainbox
{ position:absolute;
  left:500px;
  top:50px;
  font-size:15px;
}
</style>
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
</div>
<div class=dropdown>
<style type="text/css">
div.dropdown
{ position:absolute;
  left:0px;
  top:100px;
}
</style>
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
</div>
</body>
</html>


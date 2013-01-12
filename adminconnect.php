<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRATOR LOGIN</title>
<head>
<body>
<?php
$one=$_POST['ad'];
$two=$_POST['password'];
$ver='Ramees';
$ver1='ramees';
if(($one==$ver)&&($two==$ver1))
{ echo '<a href="adminpage.php">LOGIN</a>';}
else
{ echo " WRONG USERNAME/PASSWORD";
  echo '<a href="admin.php"><br/>BACK TO LOGIN</a>';
}
?>
<br/><br/>
</body
</html>

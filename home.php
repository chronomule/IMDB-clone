<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MDBMs--Home</title>
<style type="text/css">
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
<SCRIPT LANGUAGE="JavaScript">



function checkEmail(myForm) {
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value)){
return (true)
}
alert("Invalid E-mail Address! Please re-enter.")
return (false)
}
//  End -->
</script>
</head>

<body>
<div id="content"></div>
<div id="header">
<h3>Welcome to Movie Database Management System</h3></div>
<div id="Login">
  <h1>LOGIN</h1>
  <form id="form1" name="form1" method="post" action="new.php" onSubmit="return checkEmail(this)">
    <label for="emailAddr">Email ID: </label>
    <input type="text" name="emailAddr" id="emailAddr" />
  <br/><br/>
    <label for="password">Password: </label>
    <input type="password" name="password" id="password" />  
    <br /><br/>
    <input name="signin" value="Sign In" type="submit" /><input type="reset" value="Reset"><br/><br/>
    </form>

    
  
</div>

  </table>
</div>
<div id="Footer"><br/><center></div>
<div id="Logo">MDBMs</div>
</body>
</html>







 

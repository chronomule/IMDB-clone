<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMINISTRATIVE PAGE : MDBMS</title>
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
xmlhttp.open("GET","adminsearch.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<div class=Welcome>
<h1>Welcome Mr. Administrator</h1>
<h3>You have successfully Logged in</h3>
<style type="text/css">
div.Welcome
{
 left:10px;
 top:10px;
 margin:10px;
 height:100px;
 width:800px;
 background-color:blue;
}
</style>
<br/>
<br/><a href="admin.php">LOGOUT</a>
</div>
<div class=secondbox>
<style type="text/css">
div.secondbox
{ left:10px;
  top:130px;
  margin:10px;
  height:350px;
  width:800px;
  position:absolute;
  background-color:red;
}
</style>
<h2><b>ADD OR DELETE A MOVIE</b></h2>
<br/>
<h3>ADD</h3>
<a href="addmovie.php">ADD</a>
  <br/>
<br/>
<h3>DELETE</h3>
<form id="form2" name="form2" method="post" action="deletemovie.php">
    <label for="delet">Type movie name </label>
    <input type="text" name="delet" id="delet" />
  <br/>
<input name="signin" value="Delete" type="submit" /><br/>
</form>
</div>
<div class=thirdbox>
<style type="text/css">
div.thirdbox
{ left:10px;
  top:500px;
  margin:10px;
  height:325px;
  width:800px;
  position:absolute;
  background-color:red;
}
</style>
<h2><b>ADD OR DELETE A CAST MEMBER</b></h2>
<br/>
<h3>ADD</h3>
<a href="addcast.php">ADD</a>
</form>
<br/>
<h3>DELETE</h3>
<form id="form4" name="form4" method="post" action="castdelete.php">
    <label for="castdelete">Type a cast member's name </label>
    <input type="text" name="castdelete" id="castdelete" />
  <br/>
<input name="signin" value="Delete" type="submit" /><br/>
</form>
</div>
<div class=fourthbox>
<style type="text/css">
div.fourthbox
{ left:820px;
  top:130px;
  margin:10px;
  height:350px;
  width:500px;
  position:absolute;
  background-color:red;
}
</style>
<h2><b>CENSOR REVIEWS</b></h2>
<br/>
<form id="form5" name="form5" method="post" action="censor.php">
    <label for="censor">Type movie name </label>
    <input type="text" name="censor" id="censor" />
  <br/>
<label for="email">Type Email ID</label>
    <input type="text" name="email" id="email" />
<br/>
<br/>
<input name="signin" value="Delete Review" type="submit" /><br/>
</form>
</br>
<br/>
<a href="admin.php">LOGOUT</a>
</div>
<div class=fifthbox>
<style type="text/css">
div.fifthbox
{ left:820px;
  top:500px;
  margin:10px;
  height:325px;
  width:500px;
  position:absolute;
  background-color:red;
}
</style>
<p><b>WARN</b></p>
<form>
<input type="text" size="30" onkeyup="showResult(this.value)" />
<div id="livesearch"></div>
</form>
<br/>
<p><b>TERMINATE</b></p>
<form>
<input type="text" size="30" onkeyup="showResult(this.value)" />
<div id="livesearch"></div>
</form>
</div>
</body>
</html>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ABOUT : MDBMS</title>
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
xmlhttp.open("GET","querysearch.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<div class=about>
<style type="text/css">
div.about
{ text-align:center;
  position:absolute;
  left:300px;
  top:100px;
  font-color:blue;
}
</style>
This is Movie Database Management System (MDBMS). It enables the users to view their favourite movies and all the information regarding them. The movies are stored in a database and are updated regularly by the administrator. A user can also rate the movies according to the various parameters such as cinematography, direction..etc. Users can also give the movie a Star Rating (SR) by simply clicking highlighting the desired number of stars on the rating widget. Comprehensive cast information is also provided by the system. Each movie page also has a 'movie suggestion' option, whereby a list of movies most likely to be viewed by the user is presented to them. A user can also write a review regarding a movie he wants to rate.The trailers of select movies are also made available to them based on thier availability.

This MDBMS was created by Pritish Kishore Kumar, Ramees Roshan, and Rajiv Shaji Paul

For queries, please search below:<br/><br/>
<div class=query>
<style type="text/css">
div.query
{ left:100px;
  top:50px;
  position:relative;
}
</style>
<p><b>SEARCH:</b></p>
<form>
<input type="text" size="30" onkeyup="showResult(this.value)" />
<div id="livesearch"></div>
</form>
</div>
</body>
</html>

    


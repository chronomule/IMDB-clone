<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MDBMs</title>
<style type="text/css">
</style>
<link href="css/ratepage1.css" rel="stylesheet" type="text/css" />
<style type="text/css">
</style>
</head>

<body>
<div id="content"></div>
<div id="Header"></div>

<div id="Headbg"></div>
<div id="Logo">MDBMs</div>
<div id="Rate">
<h1>Rate a movie</h1>
  <form id="form1" name="form1" method="post" action="review.php?">
    <label for="moviename">Movie Name: </label>
    <input type="text" name="moviename" id="moviename" /><br/><br/>
    <label for="Direction">Direction: </label>
    <input type="float" name="Direction" id="Direction" /><br/><br/>
    <label for="Screenplay">Screenplay: </label>
    <input type="float" name="Screenplay" id="Screenplay" /><br/><br/>
    <label for="Cinematography">Cinematography: </label>
    <input type="float" name="Cinematography" id="Cinematography" /><br/><br/>
    <label for="Editing">Editing: </label>
    <input type="float" name="Editing" id="Editing" /><br/><br/>
    <label for="Costume">Costume: </label>
    <input type="float" name="Costume" id="Costume" /><br/><br/>
    <label for="Background Score">Background Score: </label> 
    <input type="float" name="Backgroundscore" id="Backgroundscore" /><br/><br/>
   <label for="Emailid">Email Id: </label> 
    <input type="float" name="Emailid" id="Emailid" /><br/><br/>
    <input type="submit" name="rate" id="rate" value="Submit" />
  </form>
</div>
</body>
</html>

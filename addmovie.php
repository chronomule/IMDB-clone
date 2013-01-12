<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD A MOVIE : MDBMS</title>
</head>
<body>
<div class=addrate>
<style type="text/css">
div.addrate
{ position:absolute;
  left:20px;
  top:10px;
 }
</style>
<h1>ADD A MOVIE</h1>
<form id="form1" name="form1" method="post" action="addredirect.php">
    <label for="gen1">Genre ID (1)</label>
    <input type="float" name="gen1" id="gen1" /><br/><br/>
    <label for="gen2">Genre ID (2)</label>
    <input type="float" name="gen2" id="gen2" /><br/><br/>
    <label for="dor">Date of Release</label>
    <input type="date" name="dor" id="dor" /><br/><br/>
    <label for="col">Collection</label>
    <input type="float" name="col" id="col" /><br/><br/>
    <label for="bud">Budget</label>
    <input type="float" name="bud" id="bud" /><br/><br/>
    <label for="dur">Duration</label>
    <input type="time" name="dur" id="dur" /><br/><br/>
    <label for="img">Images</label> 
    <input type="text" name="img" id="img" /><br/><br/>
   <label for="sl">Storyline</label> 
    <input type="text" name="sl" id="sl" /><br/><br/>
<label for="award">Awards</label>
    <input type="text" name="award" id="award" /><br/><br/>
    <label for="direc">Director</label>
    <input type="text" name="direc" id="direc" /><br/><br/>
    <label for="prod">Producer</label>
    <input type="text" name="prod" id="prod" /><br/><br/>
    <label for="music">Music</label>
    <input type="text" name="music" id="music" /><br/><br/>
    <label for="or">Overall Rating</label>
    <input type="float" name="or" id="or" /><br/><br/>
    <label for="mn">Movie Name</label>
    <input type="text" name="mn" id="mn" /><br/><br/>
    <label for="ci">Cast Info</label>
    <input type="text" name="ci" id="ci" /><br/><br/>
    <label for="cinf">Character Info</label> 
    <input type="text" name="cinf" id="cinf" /><br/><br/>
    <input type="submit" name="rate" id="rate" value="Submit" />
  </form>
</div>
</body>
</html>

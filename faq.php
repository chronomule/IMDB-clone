<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAQ : MDBMS</title>
</head>
<body>
<div class=faq>
<style type="text/css">
div.faq
{ position:absolute;
  left:100px;
  top:200px;
  font-color:blue;
  margin:5px;
  padding:5px;
  width:600px;
  height:200px;
}
</style>
<?php
$var=$_GET['name'];
if($var=='adddel')
{ echo " Can a user add/delete a movie?"."<br/>"." ANS:  No, the user can't add/delete a movie or any other information for that matter. Only the adminstrator has the privileges to perform such an action."; } 
else if($var=='twotype')
{ echo " Are there two types of ratings?"."<br/>"." ANS:  Yes, there are two types of ratings: Overall rating and User rating."; } 
else if($var=='advantage')
{ echo " What is the advantage of registering as a user?"."<br/>"." ANS: A registered user can submit reviews for movies of their choice, as well as rate these movies on thier various parameters. "; }
else if($var=='multirate')
{ echo " Can a user rate a movie more than once?"."<br/>"." ANS: No, a registered user can't rate a movie more than once. "; } 
else if($var=='trailer')
{ echo " Does the MDBMS provide trailers?"."<br/>"." ANS: Yes, the trailers for different movies are made available to the users depending on the their availability in the database."; }
else if($var=='critic')
{ echo " Are critic reviews available?"."<br/>"." ANS: Yes, there is provision to view reviews posted by different critics of great renown"; }
else if($var=='search')
{ echo "Can the search facility be availed of without registering as a user of the DBMS?"."<br/>"." ANS: Yes, an unregistered user can make use of the search facility provided by the MDBMS"; }
?>
</div>
</body>
</html>

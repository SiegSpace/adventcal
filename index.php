<?php

define('NONDIRECT', true);
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

include("data.php");

if ( !defined('DATAREAD') )
{
   header ("location: 404.shtml");
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
  <title>Advent Calendar 2009</title>
  <meta name="description" content="Advent Calendar 2009 (Coded by ACAPsoft)">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<br>

<table width="100%" id="texthead">
<tr><td><h1>Advent Calendar 2009</h1></td></tr><tr>
</table>

<div id="bread"><a href='http://acapsoft.com'>ACAPsoft Home</a>&nbsp;>&nbsp;<a href='http://acapsoft.com/softlist.php'>Software</a>&nbsp;>&nbsp;<a href='http://acapsoft.com/det.php?prog=AdventCal'>Advent Calendar 2009</a></div>

<br>

<ul id="main">

<?php 

$counter=1;

$damonth=date('m');
if ($damonth==12)
{
 $daday=date('d');
}
else
{
 $daday=0;
}

do
{
 echo "<li><a title='Day ".$counter."' id='day".$counter."' href='";
 if ($daday>=$counter)
 {
  echo $lnk[$counter]."'><img border='0' src='".$pic[$counter]."' width='100' height='100' />";
 }
 else
 {
  echo "index.php'>Day ".$counter;
 }
 echo "</a></li>";
 $counter++;
}
while ($counter<25);

?>

</ul>

<br>

<table width="100%" id="texthead">
<tr><td><h2>Calendar Notes</h2></td></tr>
</table>

<table cellspacing="1" width="100%" id="textblock">
<tr>
<td class="row">
<p>This is obviously just an example; the 24 days of ACAPsoft isn't to everyones taste! However the calendar is easily configured so any picture and link can be used by editing the "data.php" file. While not as easy, the position (and order) of the "windows" can be altered as well via the "default.php" file.</p>
</td>
</tr>
</table>


<br><br>
<p align="center" style='color:#AAAAAA'><font size="1">PHP Script &copy; 2009 <a href='http://acapsoft.com'>ACAPsoft</a>. All Rights Reserved.</font></p>

</body>
</html>
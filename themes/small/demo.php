<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Demo theme - Small Calendar</title>
</head>

<body>

<h2>PHP Quick Calender Demo - Small Calendar</h2>
<p>Very useful for most apps. Looks good when sits on the left or right column. Mouseover the links shows the short description.</p>

<?php
require_once('../../controller.php');
$cssCalendar= 'float:left;margin-right:30px;';
$cssLongDesc='float:left;margin-left:50px;width:400px';
// configure calendar theme
initQCalendar('small','qCalendarSmall', $cssCalendar, 'myContentSmall', $cssLongDesc, 0,0,0,0,0);
?>

</body>
</html>

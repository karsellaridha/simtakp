<?php
require_once('calendar/classes/tc_calendar.php');
$myCalendar = new tc_calendar("date1");
$myCalendar->setIcon("calendar/images/iconCalendar.gif");
$myCalendar->setDate(date('d'), date('m'), date('Y')); 
$myCalendar->setPath("calendar/");
$myCalendar->setYearInterval(1970, 2040); 
$myCalendar->showWeeks(true);  
$myCalendar->writeScript();
?>
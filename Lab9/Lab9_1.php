<?php
setlocale(LC_ALL, "Ukrainian");

$current_date = getdate();
$dayOfTheWeek = iconv("cp1251", "UTF-8", strftime('%A'));

$hours = $current_date["hours"];
$minutes = $current_date["minutes"];
$seconds = $current_date["seconds"];
$day = $current_date["mday"];
$month = $current_date["mon"];
$year = $current_date["year"];
echo "Дата в короткому форматі: <b>$day . $month. $year </b>.<br>
      Час:<b>$hours:$minutes:$seconds</b>.<br>
      День тижня: <b>".$dayOfTheWeek."</b>.";

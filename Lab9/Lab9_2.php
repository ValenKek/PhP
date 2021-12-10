<?php
setlocale(LC_ALL, "Ukrainian");

function dayOfTheWeek($custom_date){
    return iconv("cp1251", "UTF-8", strftime('%A', strtotime($custom_date)));
}

$twoDaysAgo = dayOfTheWeek("-2 day");
$yesterday = dayOfTheWeek("-1 day");
$currentDay = dayOfTheWeek("now");
$tomorrow = dayOfTheWeek("+1 day");

echo "Позавчорашній день: <b>$twoDaysAgo</b><br>
      Вчорашній день: <b>$yesterday</b><br>
      Сьогоднішній день: <b>$currentDay</b><br>
      Наступний день: <b>$tomorrow</b><br>";

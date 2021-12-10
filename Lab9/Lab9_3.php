<?php
require_once ("lab9.php");
$currentDate = getdate();
echo "<b>$currentDate[mday]. $currentDate[mon]. $currentDate[year].  
    $currentDate[hours]:$currentDate[minutes]</b>";

$current_day = $_POST['current_day'];

isset($current_day) ? print_r("<h3>Сьогоднішній день: ".dayOfTheWeek('now')." </h3>")
    : NULL;
?>

<!doctype html>
<html>
<head>
    <title>lab9_3</title>
</head>
<body>
<form method = "post">
    <p><button name = "current_day">Що сьогодні за день?</button></p>
</form?
</body>
</html>

4. <?php
function votes($votes_counter){
    $txt_counter = $votes_counter;

    if (file_exists($txt_counter)) {
        $votes = fopen($txt_counter, "r");
        $counter = fread($votes, filesize($txt_counter));
        fclose($votes);
    } else {
        $counter = 0;
    }

    $counter++;

    $votes = fopen($txt_counter, "w");
    fwrite($votes, $counter);
    fclose($votes);
}

$value = $_POST['radio_btn'];

switch ($value){
    case 1:
        votes("5.txt");
        break;
    case 2:
        votes("4.txt");
        break;
    case 3:
        votes("3.txt");
        break;
    case 4:
        votes("2.txt");
        break;
    default:
        echo "";
        break;
}
function print_results($results){
    return file_get_contents($results);
}

echo "<b>Результати:
<br><hr width = '180px' align = left>Відмінно (5) - ".print_results("5.txt")." чел.
<br>Добре (4) - ". print_results("4.txt")." чел.
<br>Задовільно (3) - " . print_results("3.txt")." чел.
<br>Погано (2) - ".print_results("2.txt")." чел.</b>";
?>

<!doctype html>
<html>
</head>
<body>
<div class="main">
    <form method="post" class="field">
        <p><label><b>Как вы оцениваете наш магазин? </b></label></p>
        <p><input type = "radio" name = "radio_btn" value = "5" checked>Отлично
            <br><input type = "radio" name = "radio_btn" value = "4">Хорошо
            <br><input type = "radio" name = "radio_btn" value = "3">Удовлетворительно
            <br><input type = "radio" name = "radio_btn" value = "2">Плохо</p>
        <p><button>Проголосовать</button><button name = "delete" value="5">Сбросить результаты</button></p>
    </form>
</div>
</body>
</html>

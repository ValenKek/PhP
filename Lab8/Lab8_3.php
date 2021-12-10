<?php
require_once ('createFileHelper.php');
require_once ('deleteFileHelper.php');
function getVotes($fileName){

    if (file_exists($fileName)) {
        $votes = fopen($fileName, "r");
        $countOfVotes = fread($votes, filesize($fileName));
        fclose($votes);
    } else {
        $countOfVotes = 0;
    }

    $countOfVotes++;

    $votes = fopen($fileName, "w");
    fwrite($votes, $countOfVotes);
    fclose($votes);
}
function printResults($results){
    if(file_exists($results))
        return file_get_contents($results);
}

$value = $_POST['radio_btn'];

switch ($value){
    case 2:
        getVotes("2.txt");
        break;
    case 3:
        getVotes("3.txt");
        break;
    case 4:
        getVotes("4.txt");
        break;
    case 5:
        getVotes("5.txt");
        break;
    default:
        echo "";
        break;
}


createAllFiles();

if($_POST['delete'] == 5) {
    deleteAllTxtFiles();
}
$excelentResults = printResults("5.txt");
$goodResults = printResults("4.txt");
$normalResults = printResults("3.txt");
$badResults = printResults("2.txt");
$max = max($excelentResults, $goodResults, $normalResults, $badResults);
echo "Результаты голосования: 
    <br><hr width = '180px' align = left>
    Отлично (5) - ".$excelentResults." чел. 
    <hr class = 'line_color' width = '$excelentResults px'> 
    Хорошо (4) - ".$goodResults." чел. 
    <hr class = 'line_color' width = '$goodResults px'> 
    Удовлетворительно (3) - ".$normalResults." чел. 
    <hr class = 'line_color' width = '$normalResults px'> 
    Плохо (2) - ".$badResults." чел. 
    <hr class = 'line_color' width = '$badResults px'> 
    <hr width = '180px' align = left>
    Наибольшее количество <br> набранных голосов: ".$max;
?>

<!doctype html>
<html>
<head>
    <style>
        hr.line_color{
            margin-top: -20px;
            margin-left: 20%;
            border: none;
            color: red;
            background-color: red;
            height: 25px;
        }
    </style>
    <title>lab8_3</title>
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

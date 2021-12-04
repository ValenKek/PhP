<?php

function isEmailValid($email){
    if(!isEmailHasCommercialAt($email)){
        echo "Email should contain @ symbol <br>";
    }
    if(isEmailHasMoreThanOneCommercialAt($email)){
        echo  "Email should contain only one @ symbol <br>";
    }
    if(!isEmailHaveDot($email)){
        echo  "Email should contain dots <br>";
    }
    if(isEmailHaveSpace($email)){
        echo  "Email shouldn`t contain spaces <br>";
    }

}
function isEmailHasCommercialAt($email){
    return strpos($email, '@') == true;
}
function isEmailHasMoreThanOneCommercialAt($email){
    return substr_count($email, '@') > 1;
}
function isEmailHaveDot($email){
    return strpos($email, '.') == true;
}

function isEmailHaveSpace($email){
    return strpos($email, ' ') == true;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $result = isEmailValid($email);
        echo "Host is ". substr($email, strpos($email,'@'));
}

?>
<form action="" method="post">
    <input type="text" name ="email">
    <input type="submit" name = "send" value="check email">
</form>

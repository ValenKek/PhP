<?php
function checkEmail($email){
    $isCorrect = true;
    if(strpos($email, '@') == false){
        printf("Email should have symbol '@';<br>");
        $isCorrect = false;
    }
    if(substr_count($email, '@') > 1){
        printf("Email should have only symbol '@';<br>");
        $isCorrect = false;
    }
    if(strpos($email, '.') == false){
        printf("Email should have symbol '.';<br>");
        $isCorrect = false;
    }
    if(substr_count($email, '.') > 1){
        printf("Email should have only symbol '.';<br>");
        $isCorrect = false;
    }
    if(strpos($email, ' ') == true){
        printf("Email should not have empty symbol;<br>");
        $isCorrect = false;
    }
    return $isCorrect;
}

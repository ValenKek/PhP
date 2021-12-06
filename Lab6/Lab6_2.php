<?php
include "checkEmail.php";
include "checkPass.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $isCorrect = true;

    $Name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($Name == null){
        echo("Name, middle name, last name: <br>");
        $isCorrect = false;
    }
    if($address == null){
        echo("Enter Address<br>");
        $isCorrect = false;
    }
    if($email == null){
        echo("Enter email<br>");
        $isCorrect = false;
    }
    else if (!checkEmail($email)){
        $isCorrect = false;
    }
    if($password == null){
        echo("Enter password<br>");
        $isCorrect = false;
    }
    else if (isPassValid($password)){
        echo("Password is incorrect<br>");
        $isCorrect = false;
    }
    if($isCorrect){
        echo("Everything is correct :");
        send($Name, $address, $email, $password);
    }
    exit;
}
function send($Name, $address, $email, $password){
    echo("<br> Name, middle name, last name: $Name<br> Address: $address<br> Email: $email<br> Password: $password<br>");
}

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $login = $_POST['login'];
    $fullName = $_POST['fullName'];
    $birthday = $_POST['birthday'];

    $person = new Person1($login, $fullName, $birthday);
    echo $person->toString();
}

class Person1
{
    var $login;
    var $fullName;
    var $birthday;

    function __construct($login, $fullName, $birthday)
    {
        $this->login = $login;
        $this->fullName = $fullName;
        $this->birthday = $birthday;
    }

    function toString()
    {
        return "Login: {$this->login}<br> FullName: {$this->fullName}<br> Birthday: {$this->birthday}<br>";
    }
}

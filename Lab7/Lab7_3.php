<?php
class NewUser extends Person2
{
    var $workPlace;
    var $familyStatus;

    function __construct($firstName, $lastname, $email,$workPlace,$familyStatus) {
        parent::__construct($firstName, $lastname, $email);

        $this->workPlace = $workPlace;
        $this->familyStatus = $familyStatus;
    }

    function toString(){
        return "Work place ->{$this->workPlace}<br>Family status ->{$this->familyStatus}<br>";
    }
}


class Person2
{
    var $firstName;
    var $lastname;
    var $email;


    function __construct($firstName, $lastname, $email)
    {
        $this->firstName = $firstName;
        $this->surname = $lastname;
        $this->email = $email;
    }

    function toString()
    {
        return "First name -> {$this->firstName}<br>Surname -> {$this->surname}<br>Email ->{$this->email}<br>";
    }
}
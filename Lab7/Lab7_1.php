<?php

class Person{
    var $firstName;
    var $lastname;
    var $email;

    function __construct($firstName, $lastname, $email){
        $this->firstName = $firstName;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}

class Article{
    var $title;
    var $author;
    var $text;

    function __construct($title, $author, $text){
        $this->title = $title;
        $this->author = $author;
        $this->text = $text;
    }

}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['firstName'];
    $surname = $_POST['lastName'];
    $email = $_POST['email'];

    $person = new Person($name, $surname, $email);
    echo "First name: $person->firstName <br> Last name: $person->lastname <br> Email: $person->email<br>";

    $title = $_POST['title'];
    $author = $_POST['author'];
    $text = $_POST['article'];

    $article = new Article($title, $author, $text);
    echo "Title: $article->title <br> Author: $article->author <br> Text: $article->text<br>";
}

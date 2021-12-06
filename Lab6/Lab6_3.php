<html>
<head>
    <meta charset="utf-8">
    <title>Lab6</title>
</head>
<body>
<form action="Lab6_2.php" method="post">
    <label>
        Name, middle name, last name
        <br>
        <input name="name">
        <br>
    </label>
    <label>
        Address
        <br>
        <input name="address">
        <br>
    </label>
    <label>
        E-mail
        <br>
        <input name="email">
        <br>
    </label>
    <label>
        Password
        <br>
        <input name="password" type="password">
        <br>
    </label>
    <label>
        <br>
        <input type="submit" value="Send">
    </label>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $isCorrect = true;

    $Name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($Name == null){
        echo("Enter Name, middle name, last name <br>");
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

function isPassValid($password)
{
    $validPass = "admin";
    return $validPass == $password;
}

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
?>

</body>
</html>
<?php

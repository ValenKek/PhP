<form action="" method="post">
    Pass: <input type="password"  name="password"/>
    <input type="submit" name = "logInButton" value="Log In"/>
</form>
<?php
if(isset($_POST['logInButton'])){
    logIn($_POST['password']);
}
function logIn($pass){
    static $user_pass = "pass";
    if(strcasecmp($user_pass, $pass) == 0){
        echo '<script> alert("Log in")</script>';
    }
    else{
        echo'<script> alert("Pass is wrong")</script>';
    }
}
?>


<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'registration');

mysqli_set_charset($connection, 'utf8_general_ci');

session_name('login');
session_start();
if($connection){
    $username = mysqli_escape_string($connection, $_POST['username']);
    $pass =  mysqli_escape_string($connection, $_POST['pass']);

    $queryUserInfo = mysqli_query($connection, 'SELECT * FROM users WHERE username = "' . $username . '"');
    $userData = mysqli_fetch_assoc($queryUserInfo);

    include_once ('../view/login.php');


}else{
    echo "Error with DB connection";
}

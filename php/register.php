<?php
$connection = mysqli_connect('127.0.0.1', 'root', '', 'registration');

mysqli_set_charset($connection, 'utf8_general_ci');

session_name('registration');
session_start();
if($connection){

    $username = mysqli_escape_string($connection, $_POST['username']);
    $email = mysqli_escape_string($connection, $_POST['email']);
    $pass =  mysqli_escape_string($connection, $_POST['pass']);

    $queryCheckName = mysqli_query($connection, 'SELECT * FROM users WHERE username = "' . $username . '"');
    $queryCheckEmail = mysqli_query($connection, 'SELECT * FROM users WHERE email = "' . $email . '"');


    if ($queryCheckName -> num_rows == 0 && $queryCheckEmail -> num_rows == 0){
        $query = mysqli_query($connection, 'INSERT INTO users (username, password, email) VALUES ("' . $username . '", "' . md5($pass) . '", "' . $email . '")');

        include_once ('../view/register.php');



}
}else{
    echo "Error with DB connection";
}
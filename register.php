<?php
 require_once('db.php');
$login = $_POST['login'];
$pass = $_POST['pass'];
$repeatpass = $_POST['repeatpass'];
$email = $_POST['email'];


if (empty($login) || empty($pass) || empty($repeatpass)|| empty($email) ){
    echo "Черкніть свій слід у всіх полях";
}else 
{
    if($pass != $repeatpass){
        echo "Паролі не співпадають";
    }else {
        $sql = "INSERT INTO `users` (username,email,password) VALUES ('$login', '$email', '$pass')";
        if ($conn -> query($sql) === TRUE){
            echo "Успішна реєстрація, вітаю в РАБС... ";
        }
        else{
            echo "От халепа... Помилка: " . $conn->error;
        }
    }
    
}
 


<?php
require_once('db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];

if (empty($login) || empty($pass))
{
    echo "Заповніть всі поля";
} else {
    $sql = "SELECT * FROM `users` WHERE username = '$login' AND password = '$pass' ";
    $result = $conn->query($sql);

    if($result->num_rows > 0 )
    {
        while($row = $result->fetch_assoc()){
            echo "Ласкаво просимо! ". $row ['username'];
        }
    }else {
        echo "Такого користувача не зареєстровано";
    }
}
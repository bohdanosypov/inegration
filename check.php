<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);

    $password = filter_var(trim($_POST['password']),
    FILTER_SANITIZE_STRING);
    
    if(mb_strlen($login) <  5 || mb_strlen($login) >  50) 
    {
        echo "Недопутима довжина логіну";
        exit();
    }
    else if(mb_strlen($password) <  2 || mb_strlen($password) > 30) 
    {
        echo "Недопутима довжина паролю";
        exit();
    }

    $mysql = new mysqli('localhost' , 'root' , 'root' , 'register-bd');
    $mysql->query("INSERT INTO `users` (`login` , `password`)
    VALUES ('$login' , '$password')");

    $mysql->close();

    header('location: /');
?>

$mysql = new mysqli('localhost' , 'root' , 'root' , 'register-bd');
    $mysql->query("INSERT INTO `users` (`login` , `password`)
    VALUES ('$login' , '$password')");


<?php
    if(isset($_POST['send'])){

        $config = [
            'dbname' => 'hng',
            'pass' => '@hng.intern1',
            'username' => 'intern',
            'host' => 'localhost'
        ];

        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
        $con = new PDO($dsn, $config['username'], $config['pass']);

        $result = $con->query('SELECT * FROM password');
        $data = $result->fetch();
        $password = $data['password'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['message'];
        header("location: http://hng.fun/sendmail.php?password=".$password."&subject=".$subject."&body=".$body."&to=olanre12waju@gmail.com");
    }else{
        header("location: AbdulrahmanAbdulkarimAyoola.html");
    }
?>
<?php

    session_start();

    $_SESSION['user_id'] = 3;
    
    $db = new PDO('mysql:host=localhost;dbname=PHPoll', 'root', 'root');

?>
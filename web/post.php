<?php
    declare(strict_types=1);

    // echo "post.php" . '<br>';
    session_start();
    // echo 'ID сессии: ' . session_id() . '<br>'; // идентификатор сессии

    // echo '<pre>';
    // echo '$_SESSION: <br>';
    // print_r($_SESSION);
    // echo '$_POST: <br>';
    // print_r($_POST);
    // echo '</pre>';

	if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
    } 

    // echo '<pre>';
    // echo '$_SESSION: <br>';
    // print_r($_SESSION);
    // echo '$_POST: <br>';
    // print_r($_POST);
    // echo '</pre>';
    
    // echo 'post.php -> index.php' . PHP_EOL;
    header("Location: index.php");

    //var_dump($_FILES);
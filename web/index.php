<?php
    declare(strict_types=1);
    // echo "index.php" . '<br>';

    session_start();
    // echo 'ID сессии: ' . session_id() . '<br>'; // идентификатор сессии
 
    // echo '<pre>';
    // echo '$_SESSION: <br>';
    // print_r($_SESSION);
    // echo '</pre>';

    if (isset($_SESSION['name'])) {

        // echo '<pre>';
        // echo '$_SESSION: <br>';
        // print_r($_SESSION);
        // echo '</pre>';

        echo 'Hello ' . $_SESSION['name'] . '<br>';
        // echo 'index.php -> exit.php' . '<br>';
        echo 'Перейти на exit.php, что бы закрыть сессию!' . '<br>';
        header("Location: exit.php");

        } else {
            // echo "index.php -> form.php"  . '<br>';
            // echo "include form.php" . '<br>';
            include 'form.php';
    }
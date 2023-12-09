<?php
    declare(strict_types=1);
    echo "exit.php" . '<br>';

    session_start();
    echo 'ID сессии: ' . session_id() . '<br>'; // идентификатор сессии

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>' . '<br>';

    if (isset($_SESSION['name'])) { 
        echo "Удаление сессии" . '<br>'; 
        session_destroy(); //Удаление сессии
    }

    echo 'exit.php -> index.php' . '<br>';
    sleep(2);
    header("Location: index.php");
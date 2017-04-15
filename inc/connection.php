<?php
    require_once "DB.php";
    
    $connection = mysqli_connect(
        DB_HOST,
        DB_USER,
        DB_PASSWORD,
        DB_BASE
    );

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>
<?php
    require_once "DB.php";
    
    $connection = mysqli_connect(
        DB_HOST,
        DB_USER,
        DB_PASSWORD,
        DB_BASE
    );
?>
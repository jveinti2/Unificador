<?php 
    $conexion = mysqli_connect(
        $host = "127.0.0.1",
        $username = "root",
        $password = "",
        $database = "db_unficador"
        // $host = "10.1.1.195",
        // $username = "App_unficador",
        // $password = "6w1nBQ1XK-de1+wWrZgbS7",
        // $database = "db_unficador"
    );
    if (!$conexion){
        die("Conexion caida" . mysqli_connect_error());
    }
    
    error_reporting(0);

?>
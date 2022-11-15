<?php
$mysqsl= new mysql(
    "localhost",
    "root",
    "",
    "android"
);
if ($mysql->connect_error){
    die("Error de conexion o mysql";
    )else{
        echo "conexion exitosa";
    }
}
?>
<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "crud"
);


if (!$conexion) {
    die("Error en la conexión: " . mysqli_connect_error());
}

echo "✅ Conectado a la base de datos ";

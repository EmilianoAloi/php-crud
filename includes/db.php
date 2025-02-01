<?php

session_start();

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "crud"
);


if (!$conn) {
    die("Error en la conexión: " . mysqli_connect_error());
}

echo "✅ Conectado a la base de datos ";

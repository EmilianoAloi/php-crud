<?php

include("db.php");


// POST method to save task

if (isset($_POST["save_task"])) {

    $title = $_POST["title"];
    $description = $_POST["description"];
    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    };

    $_SESSION['message'] = "Tarea guardada satisfactoriamente";
    $_SESSION['message_type'] = "success";

    header("Location: ../index.php");
}

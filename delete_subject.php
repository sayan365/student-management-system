<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM subjects WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Subject deleted successfully";
        header('Location: view_subjects.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
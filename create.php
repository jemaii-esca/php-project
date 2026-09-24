<?php
include 'db_connect.php';

$_first_name = $_POST['first_name'];
$_last_name = $_POST['last_name'];

$sql = "INSERT INTO students (first_name, last_name)
        VALUES ('$first_name', '$last_name')";

if (mysqli_query($conn, $sql)) {
    return header("Location: index.php?successful=1");
}else{
    echo "Error: " . mysqli_error($conn);
}
?>
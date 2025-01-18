<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM user WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error" . $conn->error;
    }
}
?>

<a href="index.php">Go back</a>
<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['i d'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE user SET name='$name',email='$email',age='$age' WHERE id=$id";
    if ($conn->query($sql) == TRUE) {
        echo "Record updated.";
        include 'index.php';
    } else {
        echo "Error" . $conn->error;
    }
}
?>
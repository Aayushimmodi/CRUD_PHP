<?php
include 'db.php';


echo "<h2><a href='create.php'>Add</a> | ";
echo "<a href='index.php'>View</a> ";
echo "</h2>";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO user(name,email,age) VALUES('$name','$email','$age')";
    if ($conn->query($sql) == TRUE) {
        echo "New record successfully.";
        include 'index.php';
    } else {
        echo "Error" . $conn->error;
    }
}
?>

<h1>Form</h1>
<form method="post" action="">
    <table>
        Name : <input type="text" name="name"><br /><br />
        Email : <input type="email" name="email"><br /><br />
        Age : <input type="text" name="age"><br /><br />
    </table>
    <input type="submit">
</form>
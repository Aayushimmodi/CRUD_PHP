<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE user SET name='$name', email='$email', age='$age' WHERE id=$id";
    if ($conn->query($sql) == TRUE) {
        include 'index.php';
    } else {
        echo "Error" . $conn->error;
    }
}

?>

<h1>Form</h1>
<form method="post" action="">
    <table>
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>"><br /><br />
        Name : <input type="text" name="name" value="<?php echo $user['name'] ?>"><br /><br />
        Email : <input type="email" name="email" value="<?php echo $user['email'] ?>"><br /><br />
        Age : <input type="text" name="age" value="<?php echo $user['age'] ?>"><br /><br />
    </table>
    <input type="submit">
</form>
<?php
include 'db.php';


echo "<h2><a href='create.php'>Add</a> | ";
echo "<a href='index.php'>View</a>";
echo "</h2>";


$sql = 'SELECT * FROM user';
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1'> 
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Action</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['age']}</td>
            <td>
                <a href='update.php?id={$row['id']}'>Edit</a> | 
                <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

?>
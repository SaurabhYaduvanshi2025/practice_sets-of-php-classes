<?php
// 1. Database Connection Parameters
$host     = "localhost";
$username = "root";
$password = "Indian@12345";         
$database = "testdb";

// 2. Connection banayein
$conn = new mysqli($host, $username, $password, $database);

// Connection check karein
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 3. Query run karein
$sql = "SELECT id, name, email FROM user";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px auto; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

<h2 style="text-align: center;">Users List</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // 4. Check karein records hain ya nahi aur loop chalayein
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found.</td></tr>";
        }

        // 5. Connection close karein
        $conn->close();
        ?>
    </tbody>
</table>

</body>
</html>
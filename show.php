<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet";
header("Content-Type:text/html; charset=utf-8");
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
echo '<br>';
?>

<?php
$sql = "SELECT * FROM lost";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td>" . $row["id"] . "</td>
   <td>" . $row["name"] . "</td>
   <td>" . $row["type"] . "</td>
   <td>" . $row["sex"] . "</td>
   <td>" . $row["place"] . "</td>
   <td>" . $row["phone"] . "</td>
   <td>" . $row["information"] . "</td>";

echo "</tr>";
echo '<br>';
}
}
$conn->close();
?>

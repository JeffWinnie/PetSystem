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
?>

<?php
$sql = 
"INSERT INTO lost(name,type,sex,place,phone,information) 
VALUES('".$_POST["name"]."', '".$_POST["type"]."', '".$_POST["sex"]."', '".$_POST["place"]."', '".$_POST["phone"]."', '".$_POST["information"]."')";
if ($conn->query($sql) === TRUE) {
	echo '<div class="alert alert-success" role="alert">輸入成功！3秒後回首頁</div>';
	header("Refresh: 3; url=index.php");
}else{
	echo "Error: " . $sql . "<br>" . $conn->error;
	echo '<a href="index.php" class="btn btn-info">回首頁</a>';
}
	$conn->close();
?>